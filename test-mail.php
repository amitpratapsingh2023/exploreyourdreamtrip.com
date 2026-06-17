<?php
/**
 * Quick mail test using PHPMailer — DELETE this file before going live!
 * Access: http://localhost/Git/exploreyourdreamtrip.com/test-mail.php
 *         OR https://exploreyourdreamtrip.com/test-mail.php
 */

use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/includes/mailer.php';

try {
    $mail = createMailer();
    $mail->addAddress('apssmj@gmail.com');
    $mail->Subject = 'Test Email - Explore Your Dream Trip';
    $mail->isHTML(false);
    $mail->Body = "This is a test email.\n\nIf you see this, PHPMailer + Gmail SMTP is working correctly!";
    $mail->send();

    echo '<p style="color:green;font-family:sans-serif;font-size:18px;">✅ Email sent successfully! Check your inbox.</p>';

} catch (Exception $e) {
    echo '<p style="color:red;font-family:sans-serif;font-size:18px;">❌ Email failed: ' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p style="font-family:sans-serif;font-size:14px;color:#555;">Make sure you set your Gmail App Password in <strong>includes/mailer.php</strong></p>';
}
