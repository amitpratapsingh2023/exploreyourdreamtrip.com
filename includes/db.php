<?php
/**
 * Database Connection Helper - Explore Your Dream Trip
 * 
 * Reuses the Database singleton from the admin panel core.
 */

require_once __DIR__ . '/../admin/core/Database.php';

$db = Database::getInstance();

if (!$db->isConnected()) {
    // Return connection error cleanly in case of AJAX requests
    if (defined('AJAX_REQUEST') && AJAX_REQUEST === true) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'error' => 'Database connection failed.'
        ]);
        exit;
    }
    
    // For regular page loads, display a warning
    die('Database connection error.');
}

return $db->getConnection();
