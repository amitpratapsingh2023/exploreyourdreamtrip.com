<?php
/**
 * Mailer Helper
 * Returns a pre-configured PHPMailer instance using Gmail SMTP.
 *
 * HOW TO SET UP GMAIL APP PASSWORD:
 *  1. Go to https://myaccount.google.com/security
 *  2. Enable 2-Step Verification (required)
 *  3. Go to https://myaccount.google.com/apppasswords
 *  4. App name: "Explore Your Dream Trip" → Generate
 *  5. Copy the 16-character password → paste below as SMTP_PASS
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

// ── Gmail SMTP Credentials ────────────────────────────────────────────────────
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'exploreyourdreamtrip@gmail.com'); // Your Gmail
define('SMTP_PASS', 'vsbgivdldbyqcefy
');  // Gmail App Password
define('SMTP_FROM', 'exploreyourdreamtrip@gmail.com');
define('SMTP_FROM_NAME', 'Explore Your Dream Trip');
// ─────────────────────────────────────────────────────────────────────────────

/**
 * Returns a configured PHPMailer instance ready to send.
 */
function createMailer(): PHPMailer
{
    $mail = new PHPMailer(true); // true = throw exceptions

    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = SMTP_PORT;

    $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
    $mail->CharSet = 'UTF-8';

    return $mail;
}
