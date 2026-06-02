<?php
/**
 * Submit Inquiry Handler - AJAX Endpoint
 */

// Define AJAX request flag to format PDO errors as JSON
define('AJAX_REQUEST', true);

header('Content-Type: application/json');

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid request method. Only POST is allowed.'
    ]);
    exit;
}

// Require database connection
$pdo = require_once 'includes/db.php';

// Get and sanitize POST inputs
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$service = isset($_POST['service']) ? trim($_POST['service']) : '';
$requirements = isset($_POST['requirements']) ? trim($_POST['requirements']) : '';

// Validation checks
if (empty($name)) {
    echo json_encode([
        'success' => false,
        'error' => 'Full Name is a required field.'
    ]);
    exit;
}

if (empty($phone)) {
    echo json_encode([
        'success' => false,
        'error' => 'Phone Number is a required field.'
    ]);
    exit;
}

try {
    // Set local timezone for accurate creation datetime
    date_default_timezone_set('Asia/Kolkata');
    $created_at = date('Y-m-d H:i:s');

    // Insert inquiry into table
    $stmt = $pdo->prepare("
        INSERT INTO `inquiries` (`name`, `phone`, `email`, `service`, `requirements`, `created_at`)
        VALUES (:name, :phone, :email, :service, :requirements, :created_at)
    ");
    
    $stmt->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':email' => !empty($email) ? $email : null,
        ':service' => !empty($service) ? $service : null,
        ':requirements' => !empty($requirements) ? $requirements : null,
        ':created_at' => $created_at
    ]);
    
    echo json_encode([
        'success' => true,
        'message' => 'Inquiry submitted and saved successfully.'
    ]);
    exit;

} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Database error: ' . $e->getMessage()
    ]);
    exit;
}
