<?php
/**
 * CategoryModel — Blog categories management
 */
class CategoryModel extends Model
{
    protected string $table = 'blog_categories';

    /** Get all categories with blog count */
    public function getAllWithCount(string $search = ''): array
    {
        $params = [];
        $where = '';
        if ($search) {
            $where = "WHERE c.name LIKE ? OR c.slug LIKE ?";
            $params = ["%{$search}%", "%{$search}%"];
        }
        return $this->db->fetchAll(
            "SELECT c.*, COUNT(b.id) AS blog_count
             FROM {$this->table} c
             LEFT JOIN blogs b ON b.category_id = c.id
             {$where}
             GROUP BY c.id
             ORDER BY c.id DESC",
            $params
        );
    }

    /** Get active categories (for dropdowns) */
    public function getActive(): array
    {
        return $this->where(['status' => 1], 'name', 'ASC');
    }

    /** Get active categories that have at least one published blog */
    public function getActiveWithPublishedPosts(): array
    {
        return $this->db->fetchAll(
            "SELECT c.*, COUNT(b.id) AS published_blog_count
             FROM {$this->table} c
             INNER JOIN blogs b
                ON b.category_id = c.id
                AND b.status = 'published'
                AND (b.published_at IS NULL OR b.published_at <= NOW())
             WHERE c.status = 1
             GROUP BY c.id
             HAVING COUNT(b.id) > 0
             ORDER BY c.name ASC"
        );
    }

    /** Find an active category that has at least one published blog */
    public function findActivePublishedBySlug(string $slug): array|false
    {
        return $this->db->fetch(
            "SELECT c.*, COUNT(b.id) AS published_blog_count
             FROM {$this->table} c
             INNER JOIN blogs b
                ON b.category_id = c.id
                AND b.status = 'published'
                AND (b.published_at IS NULL OR b.published_at <= NOW())
             WHERE c.status = 1 AND c.slug = ?
             GROUP BY c.id
             HAVING COUNT(b.id) > 0
             LIMIT 1",
            [$slug]
        );
    }

    /** Find by slug */
    public function findBySlug(string $slug): array|false
    {
        return $this->db->fetch("SELECT * FROM {$this->table} WHERE slug = ? LIMIT 1", [$slug]);
    }

    /** Check if category has blogs */
    public function hasBlogPosts(int $id): bool
    {
        $count = $this->db->fetchColumn("SELECT COUNT(*) FROM blogs WHERE category_id = ?", [$id]);
        return $count > 0;
    }
}
