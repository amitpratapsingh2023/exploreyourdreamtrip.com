<?php
/**
 * Database Migration Script
 * 
 * This script safely applies `schema.sql` to the database.
 * Because schema.sql uses "CREATE TABLE IF NOT EXISTS", it is 100% safe to run multiple times.
 * It will simply create any missing tables (like newsletters) without touching existing data.
 */

// We use the same bootstrap to ensure secure session & DB connections
require_once __DIR__ . '/bootstrap.php';

// IMPORTANT: Ensure ONLY logged-in admins can trigger a migration!
Auth::requireLogin();

$pageTitle = 'Database Migration';
include 'partials/header.php';
include 'partials/sidebar.php';

$message = '';
$status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    CSRF::validateOrDie();

    $schemaFile = __DIR__ . '/schema.sql';

    if (!file_exists($schemaFile)) {
        $status = 'error';
        $message = 'Cannot find schema.sql file.';
    } else {
        $sql = file_get_contents($schemaFile);
        $db = Database::getInstance();

        try {
            // execute() typically runs single prepared statements, 
            // but for raw SQL dumps we use the raw PDO connection:
            $pdo = $db->getConnection();
            $pdo->exec($sql);

            $status = 'success';
            $message = 'Database migrated successfully! All missing tables have been created.';
        } catch (PDOException $e) {
            $status = 'error';
            $message = 'Migration failed: ' . $e->getMessage();
        }
    }
}
?>

<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Database Migration</h1>
        <p class="text-sm text-gray-500 mt-0.5">Safely synchronize your database with the latest schema.</p>
    </div>
</div>

<div class="max-w-2xl">
    <?php if ($message): ?>
        <div
            class="mb-6 p-4 rounded-xl border <?= $status === 'success' ? 'bg-green-50 dark:bg-green-500/10 border-green-200 dark:border-green-500/20 text-green-700 dark:text-green-400' : 'bg-red-50 dark:bg-red-500/10 border-red-200 dark:border-red-500/20 text-red-700 dark:text-red-400' ?>">
            <div class="flex items-center gap-3">
                <i class="fa-solid <?= $status === 'success' ? 'fa-circle-check' : 'fa-triangle-exclamation' ?>"></i>
                <span class="font-medium text-sm"><?= e($message) ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div class="admin-card p-8">
        <div class="flex items-center gap-4 mb-6">
            <div
                class="w-12 h-12 rounded-2xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400">
                <i class="fa-solid fa-database text-xl"></i>
            </div>
            <div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">Sync Schema</h3>
                <p class="text-sm text-gray-500">Run this whenever you add new features (like Newsletters).</p>
            </div>
        </div>

        <div class="bg-gray-50 dark:bg-white/5 p-4 rounded-xl mb-6">
            <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-2 list-disc list-inside">
                <li>Reads from <code>admin/schema.sql</code></li>
                <li>Uses <strong>IF NOT EXISTS</strong> logic (100% safe for existing data).</li>
                <li>Instantly creates the <code>newsletters</code> and <code>inquiries</code> tables.</li>
            </ul>
        </div>

        <form method="POST">
            <?= CSRF::field() ?>
            <button type="submit"
                class="btn btn-primary w-full py-3 text-sm font-bold flex items-center justify-center gap-2">
                <i class="fa-solid fa-play"></i> Run Migration Now
            </button>
        </form>
    </div>
</div>

<?php include 'partials/footer.php'; ?>