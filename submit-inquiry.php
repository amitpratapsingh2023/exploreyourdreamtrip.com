<?php
/**
 * Submit Inquiry Handler - AJAX Endpoint
 * Saves inquiry to database AND sends email via Gmail SMTP (PHPMailer).
 */

use PHPMailer\PHPMailer\Exception;

// Define AJAX request flag to format PDO errors as JSON
define('AJAX_REQUEST', true);

header('Content-Type: application/json');

// Recipients who will receive inquiry notification emails
$admin_emails = [
    'exploreyourdreamtrip@gmail.com',
    'apssmj@gmail.com'
];

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid request method. Only POST is allowed.'
    ]);
    exit;
}

// Require database connection and mailer helper
$pdo = require_once 'includes/db.php';
require_once 'includes/mailer.php';

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

    // ── Send email via PHPMailer (Gmail SMTP) ─────────────────────────────────
    $display_email = !empty($email) ? $email : 'Not provided';
    $display_service = !empty($service) ? $service : 'Not specified';

    $mail = createMailer();
    $mail->Subject = "New Inquiry from {$name} - Explore Your Dream Trip";

    // Add all admin recipients
    foreach ($admin_emails as $admin) {
        $mail->addAddress($admin);
    }

    // Set Reply-To as the visitor's email (so you can reply directly to them)
    if (!empty($email)) {
        $mail->addReplyTo($email, $name);
    }

    // Plain text email body
    $mail->isHTML(false);
    $mail->Body =
        "You have received a new travel inquiry.\n" .
        "=========================================\n\n" .
        "Name     : {$name}\n" .
        "Phone    : {$phone}\n" .
        "Email    : {$display_email}\n" .
        "Service  : {$display_service}\n" .
        "Message  :\n{$requirements}\n\n" .
        "=========================================\n" .
        "Received : {$created_at} (IST)\n" .
        "Source   : Explore Your Dream Trip Website\n";

    $mail->send();
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
} catch (Exception $e) {
    // Email failed — inquiry is already saved in DB, so don't block the user
    echo json_encode([
        'success' => true,
        'message' => 'Inquiry submitted successfully. We will contact you soon!'
    ]);
    exit;
}
