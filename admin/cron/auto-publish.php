<?php
/**
 * Cron — Auto-publish scheduled blog posts
 *
 * Run this via cron every minute (or every 5 minutes):
 * * * * * * php /path/to/admin/cron/auto-publish.php >> /path/to/admin/cron/cron.log 2>&1
 */

// This script is run from CLI, not web
if (php_sapi_name() !== 'cli' && !defined('CRON_RUN')) {
    http_response_code(403);
    exit('Access denied.');
}

require_once dirname(__DIR__) . '/bootstrap.php';

$model = new BlogModel();
$published = $model->autoPublish();

$timestamp = date('Y-m-d H:i:s');
if ($published > 0) {
    echo "[{$timestamp}] Auto-published {$published} scheduled post(s).\n";
} else {
    echo "[{$timestamp}] No scheduled posts to publish.\n";
}
