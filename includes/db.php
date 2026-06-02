<?php
/**
 * Database Connection Helper - Explore Your Dream Trip
 * 
 * Connects to MySQL using PDO and automatically creates the database
 * and inquiries table if they do not already exist.
 */

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'exploreyourdreamtrip';

try {
    // 1. First connect to MySQL without specifying a database to verify connection/create DB
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // 2. Create database if not exists
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    
    // 3. Reconnect specifying the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // 4. Create inquiries table if it doesn't exist
    $table_sql = "
        CREATE TABLE IF NOT EXISTS `inquiries` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(255) NOT NULL,
            `phone` VARCHAR(50) NOT NULL,
            `email` VARCHAR(255) DEFAULT NULL,
            `service` VARCHAR(100) DEFAULT NULL,
            `requirements` TEXT DEFAULT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";
    $pdo->exec($table_sql);
    
    // Safeguard: Add created_at column if the table was created previously without it
    try {
        @$pdo->exec("ALTER TABLE `inquiries` ADD COLUMN `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP AFTER `requirements`");
    } catch (PDOException $e) {
        // Ignored if column already exists
    }

} catch (PDOException $e) {
    // Return connection error cleanly in case of AJAX requests
    if (defined('AJAX_REQUEST') && AJAX_REQUEST === true) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'error' => 'Database connection failed: ' . $e->getMessage()
        ]);
        exit;
    }
    
    // For regular page loads, display a warning
    die('Database connection error: ' . $e->getMessage());
}

return $pdo;
