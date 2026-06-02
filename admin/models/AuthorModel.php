<?php
/**
 * AuthorModel — Blog authors management
 */
class AuthorModel extends Model
{
    protected string $table = 'authors';

    /** Get all authors for listing */
    public function getAll(string $search = ''): array
    {
        $params = [];
        $where = '';
        if ($search) {
            $where = "WHERE a.name LIKE ? OR a.email LIKE ? OR a.designation LIKE ?";
            $params = ["%{$search}%", "%{$search}%", "%{$search}%"];
        }
        return $this->db->fetchAll(
            "SELECT a.*, COUNT(b.id) AS blog_count
             FROM {$this->table} a
             LEFT JOIN blogs b ON b.author_id = a.id
             {$where}
             GROUP BY a.id
             ORDER BY a.id DESC",
            $params
        );
    }

    /** Get active authors (for dropdowns) */
    public function getActive(): array
    {
        return $this->where(['status' => 1], 'name', 'ASC');
    }

    /** Find by slug */
    public function findBySlug(string $slug): array|false
    {
        return $this->db->fetch("SELECT * FROM {$this->table} WHERE slug = ? LIMIT 1", [$slug]);
    }
}
