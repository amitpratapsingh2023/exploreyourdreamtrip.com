<?php
/**
 * Logout — Destroy session and redirect to login
 */
require_once __DIR__ . '/bootstrap.php';
Auth::logout();
redirect('login');
