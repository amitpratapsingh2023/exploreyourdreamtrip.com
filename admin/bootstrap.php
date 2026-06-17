<?php
/**
 * Bootstrap — Autoloads core classes, starts session, and initializes the application.
 * Include this file at the top of every admin page.
 */

// Prevent direct access
if (!defined('ADMIN_PANEL')) {
    define('ADMIN_PANEL', true);
}

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '1');

// Define paths
define('ADMIN_ROOT', __DIR__);
define('ADMIN_CORE', ADMIN_ROOT . '/core');
define('ADMIN_MODELS', ADMIN_ROOT . '/models');
define('ADMIN_UPLOADS', ADMIN_ROOT . '/uploads');
define('SITE_ROOT', dirname(ADMIN_ROOT));

// Load core classes
require_once ADMIN_CORE . '/Database.php';
require_once ADMIN_CORE . '/Session.php';
require_once ADMIN_CORE . '/Auth.php';
require_once ADMIN_CORE . '/CSRF.php';
require_once ADMIN_CORE . '/Validator.php';
require_once ADMIN_CORE . '/Model.php';
require_once ADMIN_CORE . '/helpers.php';

// Load models
require_once ADMIN_MODELS . '/AdminModel.php';
require_once ADMIN_MODELS . '/CategoryModel.php';
require_once ADMIN_MODELS . '/TagModel.php';
require_once ADMIN_MODELS . '/AuthorModel.php';
require_once ADMIN_MODELS . '/BlogModel.php';
require_once ADMIN_MODELS . '/LeadModel.php';
require_once ADMIN_MODELS . '/NewsletterModel.php';

// Start session
Session::start();

// Site constants (reuse from main config if available)
if (!defined('SITE_NAME'))
    define('SITE_NAME', 'Explore Your Dream Trip');
if (!defined('SITE_URL'))
    define('SITE_URL', 'https://exploreyourdreamtrip.com');
