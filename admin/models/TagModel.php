<?php
/**
 * TagModel — Blog tags management
 */
class TagModel extends Model
{
    protected string $table = 'blog_tags';

    /** Get all tags with usage count */
    public function getAllWithCount(string $search = ''): array
    {
        $params = [];
        $where = '';
        if ($search) {
            $where = "WHERE t.name LIKE ? OR t.slug LIKE ?";
            $params = ["%{$search}%", "%{$search}%"];
        }
        return $this->db->fetchAll(
            "SELECT t.*, COUNT(bt.blog_id) AS usage_count
             FROM {$this->table} t
             LEFT JOIN blog_tag bt ON bt.tag_id = t.id
             {$where}
             GROUP BY t.id
             ORDER BY t.id DESC",
            $params
        );
    }

    /** Get active tags (for dropdowns / checkboxes) */
    public function getActive(): array
    {
        return $this->where(['status' => 1], 'name', 'ASC');
    }

    /** Find by slug */
    public function findBySlug(string $slug): array|false
    {
        return $this->db->fetch("SELECT * FROM {$this->table} WHERE slug = ? LIMIT 1", [$slug]);
    }

    /** Get tags for a specific blog post */
    public function getByBlogId(int $blogId): array
    {
        return $this->db->fetchAll(
            "SELECT t.* FROM {$this->table} t
             INNER JOIN blog_tag bt ON bt.tag_id = t.id
             WHERE bt.blog_id = ?
             ORDER BY t.name ASC",
            [$blogId]
        );
    }
}
