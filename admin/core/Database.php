<?php
/**
 * Database — Singleton PDO wrapper
 * Provides a single, reusable PDO connection across the application.
 */
class Database
{
    private static ?Database $instance = null;
    private ?PDO $pdo = null;

    // Production credentials
    private string $host = 'localhost';
    private string $dbname = 'u683808212_veda_webtech';
    private string $username = 'u683808212_amit';
    private string $password = '=/3K9qPJx0eH';
    private string $charset = 'utf8mb4';

    // Local XAMPP fallback
    private string $localDbname = 'vedawebtech';
    private string $localUsername = 'root';
    private string $localPassword = '';

    private function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            // Fallback to local XAMPP
            try {
                $dsnLocal = "mysql:host={$this->host};dbname={$this->localDbname};charset={$this->charset}";
                $this->pdo = new PDO($dsnLocal, $this->localUsername, $this->localPassword, $options);
            } catch (PDOException $e2) {
                error_log("Database connection failed: " . $e2->getMessage());
                $this->pdo = null;
            }
        }
    }

    /** Prevent cloning */
    private function __clone()
    {
    }

    /** Get singleton instance */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /** Get PDO connection */
    public function getConnection(): ?PDO
    {
        return $this->pdo;
    }

    /** Check if connected */
    public function isConnected(): bool
    {
        return $this->pdo !== null;
    }

    /** Execute a prepared statement and return the statement */
    public function query(string $sql, array $params = []): PDOStatement|false
    {
        if (!$this->pdo)
            return false;
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    /** Fetch all rows */
    public function fetchAll(string $sql, array $params = []): array
    {
        $stmt = $this->query($sql, $params);
        return $stmt ? $stmt->fetchAll() : [];
    }

    /** Fetch single row */
    public function fetch(string $sql, array $params = []): array|false
    {
        $stmt = $this->query($sql, $params);
        return $stmt ? $stmt->fetch() : false;
    }

    /** Fetch single value */
    public function fetchColumn(string $sql, array $params = []): mixed
    {
        $stmt = $this->query($sql, $params);
        return $stmt ? $stmt->fetchColumn() : false;
    }

    /** Execute and return affected rows */
    public function execute(string $sql, array $params = []): int
    {
        $stmt = $this->query($sql, $params);
        return $stmt ? $stmt->rowCount() : 0;
    }

    /** Get last insert ID */
    public function lastInsertId(): string|false
    {
        return $this->pdo ? $this->pdo->lastInsertId() : false;
    }

    /** Begin transaction */
    public function beginTransaction(): bool
    {
        return $this->pdo ? $this->pdo->beginTransaction() : false;
    }

    /** Commit transaction */
    public function commit(): bool
    {
        return $this->pdo ? $this->pdo->commit() : false;
    }

    /** Rollback transaction */
    public function rollBack(): bool
    {
        return $this->pdo ? $this->pdo->rollBack() : false;
    }
}
