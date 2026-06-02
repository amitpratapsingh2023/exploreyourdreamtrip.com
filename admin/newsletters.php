<?php
/**
 * Newsletters — View and Delete Subscribers
 */
require_once __DIR__ . '/bootstrap.php';
Auth::requireLogin();

$pageTitle = 'Newsletter Subscribers';
$model = new NewsletterModel();
$action = $_GET['action'] ?? 'list';
$id = (int)($_GET['id'] ?? 0);

// ─── Handle GET Delete ──────────────────────────────────────
if ($action === 'delete' && $id) {
    CSRF::validateOrDie();
    $model->delete($id);
    Session::flash('success', 'Subscriber deleted successfully.');
    redirect('newsletters');
}

// ─── Prepare Data ───────────────────────────────────────────
$subscribers = $model->all('created_at', 'DESC');
$totalSubscribers = count($subscribers);

include 'partials/header.php';
include 'partials/sidebar.php';
?>

<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Newsletter Subscribers</h1>
        <p class="text-sm text-gray-500 mt-0.5"><?= $totalSubscribers ?> total subscribers</p>
    </div>
</div>

<!-- Search -->
<div class="admin-card mb-6">
    <div class="p-5">
        <div class="relative max-w-md">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400"><i class="fa-solid fa-magnifying-glass text-sm"></i></div>
            <input type="text" class="table-search form-control pl-11" data-table="subscribersTable" placeholder="Search by email...">
        </div>
    </div>
</div>

<div class="admin-card">
    <?php if (empty($subscribers)): ?>
    <div class="empty-state">
        <div class="empty-icon bg-blue-50 dark:bg-blue-500/5 text-blue-500"><i class="fa-solid fa-envelope-open-text"></i></div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-2">No Subscribers Found</h3>
        <p class="text-sm text-gray-500 mt-1">Subscribers from your newsletter form will appear here.</p>
    </div>
    <?php else: ?>
    <div class="table-wrapper">
        <table class="admin-table" id="subscribersTable">
            <thead>
                <tr>
                    <th>Email Address</th>
                    <th>Subscribed On</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($subscribers as $sub): ?>
                <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-gold-100 to-amber-100 dark:from-gold-500/10 dark:to-amber-500/10 flex items-center justify-center text-gold-600 dark:text-gold-400 font-bold text-xs shrink-0">
                                <i class="fa-solid fa-at"></i>
                            </div>
                            <div>
                                <a href="mailto:<?= e($sub['email']) ?>" class="font-semibold text-gray-900 dark:text-white text-sm hover:text-gold-500 transition-colors"><?= e($sub['email']) ?></a>
                            </div>
                        </div>
                    </td>
                    <td class="text-sm text-gray-500 whitespace-nowrap">
                        <?= formatDate($sub['created_at'], 'd M Y, h:i A') ?>
                    </td>
                    <td>
                        <div class="flex items-center justify-end gap-2">
                            <button onclick="confirmDelete('newsletters?action=delete&id=<?= $sub['id'] ?>&_csrf_token=<?= CSRF::token() ?>', 'Subscriber')" class="btn btn-danger btn-icon" title="Delete"><i class="fa-solid fa-trash-can text-xs"></i></button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<?php include 'partials/footer.php'; ?>
