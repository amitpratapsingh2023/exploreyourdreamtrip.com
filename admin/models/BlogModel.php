<?php
/**
 * BlogModel — Blog posts management with full SEO + scheduling support
 */
class BlogModel extends Model
{
    protected string $table = 'blogs';

    private function publishedFilterParts(string $search = '', ?int $categoryId = null): array
    {
        $conditions = [
            "b.status = 'published'",
            "(b.published_at IS NULL OR b.published_at <= NOW())",
        ];
        $params = [];

        if ($categoryId !== null) {
            $conditions[] = "b.category_id = ?";
            $params[] = $categoryId;
        }

        if ($search !== '') {
            $conditions[] = "(b.title LIKE ? OR b.meta_title LIKE ? OR b.meta_description LIKE ? OR b.description LIKE ?)";
            $searchTerm = "%{$search}%";
            $params[] = $searchTerm;
            $params[] = $searchTerm;
            $params[] = $searchTerm;
            $params[] = $searchTerm;
        }

        return [
            'where' => 'WHERE ' . implode(' AND ', $conditions),
            'params' => $params,
        ];
    }

    /** Get blogs with category and author info */
    public function getAllWithRelations(string $search = '', string $statusFilter = ''): array
    {
        $params = [];
        $conditions = [];

        if ($search) {
            $conditions[] = "(b.title LIKE ? OR b.slug LIKE ?)";
            $params[] = "%{$search}%";
            $params[] = "%{$search}%";
        }
        if ($statusFilter) {
            $conditions[] = "b.status = ?";
            $params[] = $statusFilter;
        }

        $where = !empty($conditions) ? 'WHERE ' . implode(' AND ', $conditions) : '';

        return $this->db->fetchAll(
            "SELECT b.*, c.name AS category_name, a.name AS author_name
             FROM {$this->table} b
             LEFT JOIN blog_categories c ON c.id = b.category_id
             LEFT JOIN authors a ON a.id = b.author_id
             {$where}
             ORDER BY b.id DESC",
            $params
        );
    }

    /** Get single blog with all relations */
    public function getWithRelations(int $id): array|false
    {
        return $this->db->fetch(
            "SELECT b.*, c.name AS category_name, a.name AS author_name
             FROM {$this->table} b
             LEFT JOIN blog_categories c ON c.id = b.category_id
             LEFT JOIN authors a ON a.id = b.author_id
             WHERE b.id = ?",
            [$id]
        );
    }

    /** Create blog with tags */
    public function createWithTags(array $data, array $tagIds = []): int|false
    {
        $this->db->beginTransaction();
        try {
            $id = $this->create($data);
            if ($id && !empty($tagIds)) {
                $this->syncTags($id, $tagIds);
            }
            $this->db->commit();
            return $id;
        } catch (\Exception $e) {
            $this->db->rollBack();
            error_log("BlogModel::createWithTags error: " . $e->getMessage());
            return false;
        }
    }

    /** Update blog with tags */
    public function updateWithTags(int $id, array $data, array $tagIds = []): bool
    {
        $this->db->beginTransaction();
        try {
            $this->update($id, $data);
            $this->syncTags($id, $tagIds);
            $this->db->commit();
            return true;
        } catch (\Exception $e) {
            $this->db->rollBack();
            error_log("BlogModel::updateWithTags error: " . $e->getMessage());
            return false;
        }
    }

    /** Sync tags for a blog (remove old, add new) */
    public function syncTags(int $blogId, array $tagIds): void
    {
        $this->db->execute("DELETE FROM blog_tag WHERE blog_id = ?", [$blogId]);
        foreach ($tagIds as $tagId) {
            $this->db->query(
                "INSERT INTO blog_tag (blog_id, tag_id) VALUES (?, ?)",
                [$blogId, (int) $tagId]
            );
        }
    }

    /** Get tag IDs for a blog */
    public function getTagIds(int $blogId): array
    {
        $rows = $this->db->fetchAll("SELECT tag_id FROM blog_tag WHERE blog_id = ?", [$blogId]);
        return array_column($rows, 'tag_id');
    }

    /** Find by slug */
    public function findBySlug(string $slug): array|false
    {
        return $this->db->fetch("SELECT * FROM {$this->table} WHERE slug = ? LIMIT 1", [$slug]);
    }

    /** Get published blogs (public-facing) */
    public function getPublished(int $limit = 10, int $offset = 0): array
    {
        return $this->getPublishedFiltered($limit, $offset);
    }

    /** Get published blogs with optional category and search filters */
    public function getPublishedFiltered(int $limit = 10, int $offset = 0, string $search = '', ?int $categoryId = null): array
    {
        $filters = $this->publishedFilterParts($search, $categoryId);

        return $this->db->fetchAll(
            "SELECT b.*, c.name AS category_name, c.slug AS category_slug, a.name AS author_name, a.avatar AS author_avatar, a.designation AS author_designation
             FROM {$this->table} b
             LEFT JOIN blog_categories c ON c.id = b.category_id
             LEFT JOIN authors a ON a.id = b.author_id
             {$filters['where']}
             ORDER BY b.published_at DESC, b.created_at DESC
             LIMIT ? OFFSET ?",
            array_merge($filters['params'], [$limit, $offset])
        );
    }

    /** Get published blog by slug (public-facing) */
    public function getPublishedBySlug(string $slug): array|false
    {
        return $this->db->fetch(
            "SELECT b.*, c.name AS category_name, c.slug AS category_slug, a.name AS author_name, a.avatar AS author_avatar, a.designation AS author_designation, a.bio AS author_bio
             FROM {$this->table} b
             LEFT JOIN blog_categories c ON c.id = b.category_id
             LEFT JOIN authors a ON a.id = b.author_id
             WHERE b.slug = ? AND b.status = 'published' AND (b.published_at IS NULL OR b.published_at <= NOW())",
            [$slug]
        );
    }

    /** Count published blogs */
    public function countPublished(): int
    {
        return $this->countPublishedFiltered();
    }

    /** Count published blogs with optional category and search filters */
    public function countPublishedFiltered(string $search = '', ?int $categoryId = null): int
    {
        $filters = $this->publishedFilterParts($search, $categoryId);

        return (int) $this->db->fetchColumn(
            "SELECT COUNT(*) FROM {$this->table} b {$filters['where']}",
            $filters['params']
        );
    }

    /** Auto-publish scheduled posts (call via cron) */
    public function autoPublish(): int
    {
        return $this->db->execute(
            "UPDATE {$this->table} SET status = 'published' WHERE status = 'scheduled' AND published_at <= NOW()"
        );
    }

    /** Get featured blogs */
    public function getFeatured(int $limit = 3): array
    {
        return $this->db->fetchAll(
            "SELECT b.*, c.name AS category_name, a.name AS author_name, a.avatar AS author_avatar
             FROM {$this->table} b
             LEFT JOIN blog_categories c ON c.id = b.category_id
             LEFT JOIN authors a ON a.id = b.author_id
             WHERE b.status = 'published' AND b.featured = 1
             ORDER BY b.published_at DESC
             LIMIT ?",
            [$limit]
        );
    }

    /** Dashboard statistics */
    public function getStats(): array
    {
        return [
            'total'     => $this->count(),
            'published' => $this->count(['status' => 'published']),
            'draft'     => $this->count(['status' => 'draft']),
            'scheduled' => $this->count(['status' => 'scheduled']),
        ];
    }
}
