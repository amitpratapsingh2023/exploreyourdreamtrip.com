<?php
/**
 * Submit Inquiry Handler - AJAX Endpoint
 * Saves inquiry to database AND sends email notification to admin.
 */

// Define AJAX request flag to format PDO errors as JSON
define('AJAX_REQUEST', true);

header('Content-Type: application/json');

// ─── Config ──────────────────────────────────────────────────────────────────
// Recipients who will receive inquiry notification emails
$admin_emails = [
    'exploreyourdreamtrip@gmail.com',
    'apssmj@gmail.com'
];

// "From" address used in the email header
$from_email = 'noreply@exploreyourdreamtrip.com';
$from_name = 'Explore Your Dream Trip';
// ─────────────────────────────────────────────────────────────────────────────

// Only allow POST requests
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

// ─── Validation ──────────────────────────────────────────────────────────────
if (empty($name)) {
    echo json_encode(['success' => false, 'error' => 'Full Name is a required field.']);
    exit;
}

if (empty($phone)) {
    echo json_encode(['success' => false, 'error' => 'Phone Number is a required field.']);
    exit;
}

if (empty($requirements)) {
    echo json_encode(['success' => false, 'error' => 'Requirements / Message is a required field.']);
    exit;
}
// ─────────────────────────────────────────────────────────────────────────────

try {
    // Set local timezone for accurate datetime
    date_default_timezone_set('Asia/Kolkata');
    $created_at = date('Y-m-d H:i:s');

    // ── Save inquiry to database ──────────────────────────────────────────────
    $stmt = $pdo->prepare("
        INSERT INTO `leads` (`name`, `phone`, `email`, `service`, `message`, `created_at`)
        VALUES (:name, :phone, :email, :service, :message, :created_at)
    ");

    $stmt->execute([
        ':name' => $name,
        ':phone' => $phone,
        ':email' => !empty($email) ? $email : null,
        ':service' => !empty($service) ? $service : null,
        ':message' => $requirements,
        ':created_at' => $created_at,
    ]);

    // ── Send email notification ───────────────────────────────────────────────
    $display_email = !empty($email) ? $email : 'Not provided';
    $display_service = !empty($service) ? $service : 'Not specified';

    $subject = "New Inquiry from {$name} - Explore Your Dream Trip";

    $body = "You have received a new travel inquiry.\n";
    $body .= "=========================================\n\n";
    $body .= "Name     : {$name}\n";
    $body .= "Phone    : {$phone}\n";
    $body .= "Email    : {$display_email}\n";
    $body .= "Service  : {$display_service}\n";
    $body .= "Message  :\n{$requirements}\n\n";
    $body .= "=========================================\n";
    $body .= "Received : {$created_at} (IST)\n";
    $body .= "Source   : Explore Your Dream Trip Website\n";

    $headers = "From: {$from_name} <{$from_email}>\r\n";
    $headers .= "Reply-To: {$display_email}\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send to all admin recipients
    $to = implode(', ', $admin_emails);
    mail($to, $subject, $body, $headers);
    // ─────────────────────────────────────────────────────────────────────────

    echo json_encode([
        'success' => true,
        'message' => 'Inquiry submitted successfully. We will contact you soon!'
    ]);
    exit;

} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Database error: ' . $e->getMessage()
    ]);
    exit;
}
