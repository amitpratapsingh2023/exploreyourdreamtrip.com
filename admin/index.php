<?php
/**
 * Admin Panel Entry Point — redirects to dashboard or login
 */
require_once __DIR__ . '/bootstrap.php';

if (Auth::check()) {
    redirect('dashboard');
} else {
    redirect('login');
}
