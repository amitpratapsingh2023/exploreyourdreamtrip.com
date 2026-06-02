<?php
/**
 * AdminModel — Manages admin user accounts
 */
class AdminModel extends Model
{
    protected string $table = 'admins';

    /** Find admin by email */
    public function findByEmail(string $email): array|false
    {
        return $this->db->fetch("SELECT * FROM {$this->table} WHERE email = ? LIMIT 1", [$email]);
    }

    /** Create admin with hashed password */
    public function createAdmin(array $data): int|false
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        return $this->create($data);
    }

    /** Update admin (hash password if provided) */
    public function updateAdmin(int $id, array $data): bool
    {
        if (!empty($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        } else {
            unset($data['password']);
        }
        return $this->update($id, $data);
    }

    /** Get all admins for listing */
    public function getAll(string $search = ''): array
    {
        $params = [];
        $where = '';
        if ($search) {
            $where = "WHERE name LIKE ? OR email LIKE ?";
            $params = ["%{$search}%", "%{$search}%"];
        }
        return $this->db->fetchAll(
            "SELECT id, name, email, avatar, status, created_at, updated_at FROM {$this->table} {$where} ORDER BY id DESC",
            $params
        );
    }
}
