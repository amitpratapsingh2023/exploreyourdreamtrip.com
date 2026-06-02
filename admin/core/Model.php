<?php
/**
 * Model — Abstract base model with common CRUD operations
 * All entity models extend this class.
 */
abstract class Model
{
    protected Database $db;
    protected string $table;
    protected string $primaryKey = 'id';

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    /** Find a record by primary key */
    public function find(int $id): array|false
    {
        return $this->db->fetch(
            "SELECT * FROM {$this->table} WHERE {$this->primaryKey} = ? LIMIT 1",
            [$id]
        );
    }

    /** Get all records with optional ordering */
    public function all(string $orderBy = 'id', string $direction = 'DESC'): array
    {
        $direction = strtoupper($direction) === 'ASC' ? 'ASC' : 'DESC';
        return $this->db->fetchAll("SELECT * FROM {$this->table} ORDER BY {$orderBy} {$direction}");
    }

    /** Get records with conditions */
    public function where(array $conditions, string $orderBy = 'id', string $direction = 'DESC'): array
    {
        $clauses = [];
        $params = [];
        foreach ($conditions as $col => $val) {
            $clauses[] = "{$col} = ?";
            $params[] = $val;
        }
        $where = implode(' AND ', $clauses);
        $direction = strtoupper($direction) === 'ASC' ? 'ASC' : 'DESC';
        return $this->db->fetchAll(
            "SELECT * FROM {$this->table} WHERE {$where} ORDER BY {$orderBy} {$direction}",
            $params
        );
    }

    /** Insert a new record */
    public function create(array $data): int|false
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $this->db->query(
            "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})",
            array_values($data)
        );
        return (int) $this->db->lastInsertId();
    }

    /** Update a record by primary key */
    public function update(int $id, array $data): bool
    {
        $setClauses = [];
        $params = [];
        foreach ($data as $col => $val) {
            $setClauses[] = "{$col} = ?";
            $params[] = $val;
        }
        $params[] = $id;
        $set = implode(', ', $setClauses);
        return $this->db->execute(
            "UPDATE {$this->table} SET {$set} WHERE {$this->primaryKey} = ?",
            $params
        ) >= 0;
    }

    /** Delete a record by primary key */
    public function delete(int $id): bool
    {
        return $this->db->execute(
            "DELETE FROM {$this->table} WHERE {$this->primaryKey} = ?",
            [$id]
        ) > 0;
    }

    /** Count records with optional conditions */
    public function count(array $conditions = []): int
    {
        if (empty($conditions)) {
            return (int) $this->db->fetchColumn("SELECT COUNT(*) FROM {$this->table}");
        }
        $clauses = [];
        $params = [];
        foreach ($conditions as $col => $val) {
            $clauses[] = "{$col} = ?";
            $params[] = $val;
        }
        $where = implode(' AND ', $clauses);
        return (int) $this->db->fetchColumn(
            "SELECT COUNT(*) FROM {$this->table} WHERE {$where}",
            $params
        );
    }

    /** Paginate results */
    public function paginate(int $page = 1, int $perPage = 15, string $orderBy = 'id', string $direction = 'DESC', string $search = '', array $searchColumns = []): array
    {
        $offset = ($page - 1) * $perPage;
        $direction = strtoupper($direction) === 'ASC' ? 'ASC' : 'DESC';
        $params = [];
        $whereClause = '';

        if ($search && !empty($searchColumns)) {
            $searchClauses = [];
            foreach ($searchColumns as $col) {
                $searchClauses[] = "{$col} LIKE ?";
                $params[] = "%{$search}%";
            }
            $whereClause = 'WHERE ' . implode(' OR ', $searchClauses);
        }

        $total = (int) $this->db->fetchColumn(
            "SELECT COUNT(*) FROM {$this->table} {$whereClause}",
            $params
        );

        $paramsWithLimit = array_merge($params, [$perPage, $offset]);
        $data = $this->db->fetchAll(
            "SELECT * FROM {$this->table} {$whereClause} ORDER BY {$orderBy} {$direction} LIMIT ? OFFSET ?",
            $paramsWithLimit
        );

        return [
            'data'        => $data,
            'total'       => $total,
            'page'        => $page,
            'perPage'     => $perPage,
            'totalPages'  => (int) ceil($total / $perPage),
        ];
    }

    /** Toggle status field (0/1) */
    public function toggleStatus(int $id): bool
    {
        return $this->db->execute(
            "UPDATE {$this->table} SET status = IF(status = 1, 0, 1) WHERE {$this->primaryKey} = ?",
            [$id]
        ) > 0;
    }

    /** Check if a record exists */
    public function exists(int $id): bool
    {
        return (bool) $this->db->fetchColumn(
            "SELECT COUNT(*) FROM {$this->table} WHERE {$this->primaryKey} = ?",
            [$id]
        );
    }
}
