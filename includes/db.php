<?php
/**
 * Database Connection Helper - Explore Your Dream Trip
 * 
 * Connects to MySQL using PDO.
 */

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'exploreyourdreamtrip';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
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
