<?php
/**
 * Leads & Inquiries — View, Update Status, Delete (no create from admin)
 */
require_once __DIR__ . '/bootstrap.php';
Auth::requireLogin();

$pageTitle = 'Leads & Inquiries';
$model = new LeadModel();
$action = $_GET['action'] ?? 'list';
$id = (int)($_GET['id'] ?? 0);

// ─── Handle POST (Status Update) ────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    CSRF::validateOrDie();
    $postAction = $_POST['action'] ?? '';

    if ($postAction === 'update_status') {
        $leadId = (int)($_POST['id'] ?? 0);
        $status = $_POST['status'] ?? '';
        $notes  = trim($_POST['notes'] ?? '');
        $validStatuses = ['new', 'contacted', 'qualified', 'converted', 'closed'];

        if ($leadId && in_array($status, $validStatuses)) {
            $model->updateStatus($leadId, $status, $notes ?: null);
            Session::flash('success', 'Status updated successfully.');
        } else {
            Session::flash('error', 'Invalid data.');
        }
        redirect('leads');
    }
}

// ─── Handle GET Delete ──────────────────────────────────────
if ($action === 'delete' && $id) {
    CSRF::validateOrDie();
    $model->delete($id);
    Session::flash('success', 'Record deleted successfully.');
    redirect('leads');
}

// ─── Prepare Data ───────────────────────────────────────────
$search = trim($_GET['search'] ?? '');
$statusFilter = $_GET['status'] ?? '';
$leads = $model->getAll($search, $statusFilter);
$statusCounts = $model->getCountByStatus();

$viewLead = null;
if ($action === 'view' && $id) {
    $viewLead = $model->find($id);
    if (!$viewLead) { Session::flash('error', 'Record not found.'); redirect('leads'); }
    $pageTitle = 'Details';
}

include 'partials/header.php';
include 'partials/sidebar.php';

// ─── DETAIL VIEW ────────────────────────────────────────────
if ($action === 'view' && $viewLead):
?>

<div class="page-header">
    <div class="flex items-center gap-4">
        <a href="leads" class="w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white transition-all">
            <i class="fa-solid fa-arrow-left text-sm"></i>
        </a>
        <div>
            <h1 class="font-heading text-gray-900 dark:text-white"><?= $viewLead['service'] ? 'Inquiry Details' : 'Lead Details' ?></h1>
            <p class="text-sm text-gray-500 mt-0.5">Received <?= timeAgo($viewLead['created_at']) ?></p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-5xl">
    <!-- Lead Info -->
    <div class="lg:col-span-2 admin-card p-6">
        <div class="flex items-center gap-4 mb-8 pb-6 border-b border-gray-100 dark:border-white/5">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-500/10 dark:to-purple-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400 font-bold text-lg">
                <?= strtoupper(mb_substr($viewLead['name'], 0, 1)) ?>
            </div>
            <div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white"><?= e($viewLead['name']) ?></h3>
                <p class="text-sm text-gray-500"><?= formatDate($viewLead['created_at'], 'd M Y, h:i A') ?></p>
            </div>
            <div class="ml-auto flex flex-col items-end gap-1.5">
                <?= statusBadge($viewLead['status'], 'lead') ?>
                <?php if ($viewLead['service']): ?>
                    <span class="px-2 py-0.5 rounded-md text-[9px] font-bold uppercase tracking-wider bg-amber-500/10 text-amber-500 dark:text-amber-400">Booking Inquiry</span>
                <?php else: ?>
                    <span class="px-2 py-0.5 rounded-md text-[9px] font-bold uppercase tracking-wider bg-blue-500/10 text-blue-500 dark:text-blue-400">Contact Form</span>
                <?php endif; ?>
            </div>
        </div>

        <div class="space-y-5">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-white/5 flex items-center justify-center text-gray-500 shrink-0"><i class="fa-solid fa-envelope text-sm"></i></div>
                <div>
                    <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Email</p>
                    <?php if ($viewLead['email']): ?>
                        <a href="mailto:<?= e($viewLead['email']) ?>" class="text-sm font-medium text-gray-900 dark:text-white hover:text-gold-500"><?= e($viewLead['email']) ?></a>
                    <?php else: ?>
                        <span class="text-sm font-medium text-gray-400 italic">Not provided</span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-white/5 flex items-center justify-center text-gray-500 shrink-0"><i class="fa-solid fa-phone text-sm"></i></div>
                <div>
                    <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Phone</p>
                    <a href="tel:<?= e($viewLead['phone']) ?>" class="text-sm font-medium text-gray-900 dark:text-white hover:text-gold-500"><?= e($viewLead['phone']) ?></a>
                </div>
            </div>
            <?php if ($viewLead['service']): ?>
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-white/5 flex items-center justify-center text-gray-500 shrink-0"><i class="fa-solid fa-car-side text-sm"></i></div>
                <div>
                    <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider">Service Requested</p>
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">
                        <?php 
                        $svc = $viewLead['service'];
                        if ($svc === 'tour') echo 'All-Inclusive Tour';
                        elseif ($svc === 'tempo') echo 'Tempo Traveller Hire';
                        elseif ($svc === 'car') echo 'Premium Car Hire';
                        else echo e(ucfirst($svc));
                        ?>
                    </span>
                </div>
            </div>
            <?php endif; ?>
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-white/5 flex items-center justify-center text-gray-500 shrink-0"><i class="fa-solid fa-message text-sm"></i></div>
                <div>
                    <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-2"><?= $viewLead['service'] ? 'Requirements' : 'Message' ?></p>
                    <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed bg-gray-50 dark:bg-white/[0.02] p-4 rounded-xl"><?= nl2br(e($viewLead['message'])) ?></p>
                </div>
            </div>
            <?php if ($viewLead['notes']): ?>
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-amber-50 dark:bg-amber-500/5 flex items-center justify-center text-amber-500 shrink-0"><i class="fa-solid fa-note-sticky text-sm"></i></div>
                <div>
                    <p class="text-[11px] font-bold text-gray-400 uppercase tracking-wider mb-2">Internal Notes</p>
                    <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed bg-amber-500/5 p-4 rounded-xl border border-amber-500/10"><?= nl2br(e($viewLead['notes'])) ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Update Status Panel -->
    <div class="admin-card p-6 h-fit">
        <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white mb-5">Update Status</h3>
        <form method="POST" action="leads">
            <?= CSRF::field() ?>
            <input type="hidden" name="action" value="update_status">
            <input type="hidden" name="id" value="<?= $viewLead['id'] ?>">
            <div class="form-group">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <?php foreach (['new','contacted','qualified','converted','closed'] as $s): ?>
                    <option value="<?= $s ?>" <?= $viewLead['status'] === $s ? 'selected' : '' ?>><?= ucfirst($s) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Notes</label>
                <textarea name="notes" class="form-control" rows="4" placeholder="Internal notes..."><?= e($viewLead['notes'] ?? '') ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fa-solid fa-check text-xs"></i> Update</button>
        </form>

        <hr class="my-5 border-gray-100 dark:border-white/5">

        <button onclick="confirmDelete('leads?action=delete&id=<?= $viewLead['id'] ?>&_csrf_token=<?= CSRF::token() ?>', 'Record')" class="btn btn-danger w-full">
            <i class="fa-solid fa-trash-can text-xs"></i> Delete Record
        </button>
    </div>
</div>

<?php
// ─── LIST VIEW ──────────────────────────────────────────────
else: ?>

<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Leads & Inquiries</h1>
        <p class="text-sm text-gray-500 mt-0.5"><?= $statusCounts['total'] ?> total records</p>
    </div>
</div>

<!-- Status Filter Tabs -->
<div class="flex flex-wrap items-center gap-2 mb-6">
    <?php
    $filters = [
        '' => ['All', $statusCounts['total'], 'bg-gray-100 dark:bg-white/5 text-gray-600'],
        'new' => ['New', $statusCounts['new'], 'bg-blue-50 dark:bg-blue-500/5 text-blue-600'],
        'contacted' => ['Contacted', $statusCounts['contacted'], 'bg-purple-50 dark:bg-purple-500/5 text-purple-600'],
        'qualified' => ['Qualified', $statusCounts['qualified'], 'bg-amber-50 dark:bg-amber-500/5 text-amber-600'],
        'converted' => ['Converted', $statusCounts['converted'], 'bg-emerald-50 dark:bg-emerald-500/5 text-emerald-600'],
        'closed' => ['Closed', $statusCounts['closed'], 'bg-gray-100 dark:bg-gray-700 text-gray-500'],
    ];
    foreach ($filters as $key => $f):
        $isActive = $statusFilter === $key;
    ?>
    <a href="leads<?= $key ? "?status={$key}" : '' ?>"
       class="px-4 py-2 rounded-xl text-xs font-bold transition-all <?= $isActive ? 'bg-gold-500 text-dark-900 shadow-lg shadow-gold-500/20' : $f[2] ?> hover:-translate-y-0.5">
        <?= $f[0] ?> <span class="ml-1 opacity-70"><?= $f[1] ?></span>
    </a>
    <?php endforeach; ?>
</div>

<!-- Search -->
<div class="admin-card mb-6">
    <div class="p-5">
        <div class="relative max-w-md">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400"><i class="fa-solid fa-magnifying-glass text-sm"></i></div>
            <input type="text" class="table-search form-control pl-11" data-table="leadsTable" placeholder="Search by name, email, phone...">
        </div>
    </div>
</div>

<div class="admin-card">
    <?php if (empty($leads)): ?>
    <div class="empty-state">
        <div class="empty-icon bg-blue-50 dark:bg-blue-500/5 text-blue-500"><i class="fa-solid fa-inbox"></i></div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-2">No Records Found</h3>
        <p class="text-sm text-gray-500 mt-1">Leads and inquiries will appear here.</p>
    </div>
    <?php else: ?>
    <div class="table-wrapper">
        <table class="admin-table" id="leadsTable">
            <thead><tr><th>Contact</th><th>Phone</th><th>Source Type</th><th>Message / Requirements</th><th>Status</th><th>Received</th><th class="text-right">Actions</th></tr></thead>
            <tbody>
            <?php foreach ($leads as $lead): ?>
                <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-500/10 dark:to-purple-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400 font-bold text-xs shrink-0">
                                <?= strtoupper(mb_substr($lead['name'], 0, 1)) ?>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-white text-sm"><?= e($lead['name']) ?></p>
                                <p class="text-[11px] text-gray-400"><?= e($lead['email'] ?: 'No email') ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="text-sm"><?= e($lead['phone']) ?></td>
                    <td>
                        <?php if ($lead['service']): ?>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-bold bg-amber-500/10 text-amber-500 dark:text-amber-400">Booking Inquiry</span>
                        <?php else: ?>
                            <span class="px-2 py-0.5 rounded-md text-[10px] font-bold bg-blue-500/10 text-blue-500 dark:text-blue-400">Contact Form</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-sm text-gray-500 max-w-[200px]"><p class="truncate"><?= e($lead['message']) ?></p></td>
                    <td><?= statusBadge($lead['status'], 'lead') ?></td>
                    <td class="text-sm text-gray-500 whitespace-nowrap"><?= timeAgo($lead['created_at']) ?></td>
                    <td>
                        <div class="flex items-center justify-end gap-2">
                            <a href="leads?action=view&id=<?= $lead['id'] ?>" class="btn btn-secondary btn-icon" title="View"><i class="fa-solid fa-eye text-xs"></i></a>
                            <button onclick="confirmDelete('leads?action=delete&id=<?= $lead['id'] ?>&_csrf_token=<?= CSRF::token() ?>', 'Record')" class="btn btn-danger btn-icon" title="Delete"><i class="fa-solid fa-trash-can text-xs"></i></button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<?php endif; ?>
<?php include 'partials/footer.php'; ?>
