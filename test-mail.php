<?php
/**
 * Quick mail test — DELETE this file before going live!
 * Access: http://localhost/Git/exploreyourdreamtrip.com/test-mail.php
 */

$to = 'apssmj@gmail.com';
$subject = 'Test Email from Explore Your Dream Trip (Local)';
$body = "This is a test email.\n\nIf you see this, mail() is working correctly!";
$headers = "From: noreply@exploreyourdreamtrip.com\r\nContent-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo '<p style="color:green;font-family:sans-serif;font-size:18px;">✅ mail() called successfully! Check your Mailtrap inbox.</p>';
} else {
    echo '<p style="color:red;font-family:sans-serif;font-size:18px;">❌ mail() failed. Check php.ini SMTP settings and restart Apache.</p>';
}
