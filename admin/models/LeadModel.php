<?php
/**
 * LeadModel — Leads management (view, update status, delete only — no create from admin)
 */
class LeadModel extends Model
{
    protected string $table = 'leads';

    /** Get all leads with search and filter */
    public function getAll(string $search = '', string $statusFilter = ''): array
    {
        $params = [];
        $conditions = [];

        if ($search) {
            $conditions[] = "(name LIKE ? OR email LIKE ? OR phone LIKE ? OR message LIKE ? OR service LIKE ?)";
            $params[] = "%{$search}%";
            $params[] = "%{$search}%";
            $params[] = "%{$search}%";
            $params[] = "%{$search}%";
            $params[] = "%{$search}%";
        }
        if ($statusFilter) {
            $conditions[] = "status = ?";
            $params[] = $statusFilter;
        }

        $where = !empty($conditions) ? 'WHERE ' . implode(' AND ', $conditions) : '';

        return $this->db->fetchAll(
            "SELECT * FROM {$this->table} {$where} ORDER BY id DESC",
            $params
        );
    }

    /** Update lead status and notes */
    public function updateStatus(int $id, string $status, ?string $notes = null): bool
    {
        $data = ['status' => $status];
        if ($notes !== null) {
            $data['notes'] = $notes;
        }
        return $this->update($id, $data);
    }

    /** Get leads count by status */
    public function getCountByStatus(): array
    {
        $rows = $this->db->fetchAll(
            "SELECT status, COUNT(*) as count FROM {$this->table} GROUP BY status"
        );
        $result = ['new' => 0, 'contacted' => 0, 'qualified' => 0, 'converted' => 0, 'closed' => 0, 'total' => 0];
        foreach ($rows as $row) {
            $result[$row['status']] = (int) $row['count'];
            $result['total'] += (int) $row['count'];
        }
        return $result;
    }

    /** Get recent leads */
    public function getRecent(int $limit = 5): array
    {
        return $this->db->fetchAll(
            "SELECT * FROM {$this->table} ORDER BY created_at DESC LIMIT ?",
            [$limit]
        );
    }
}
