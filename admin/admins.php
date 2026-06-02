<?php
/**
 * Admin Accounts — CRUD for admin users
 */
require_once __DIR__ . '/bootstrap.php';
Auth::requireLogin();

$pageTitle = 'Admin Accounts';
$model = new AdminModel();
$action = $_GET['action'] ?? 'list';
$id = (int)($_GET['id'] ?? 0);

// ─── Handle POST ────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    CSRF::validateOrDie();
    $postAction = $_POST['action'] ?? '';

    if ($postAction === 'save') {
        $data = [
            'name'     => trim($_POST['name'] ?? ''),
            'email'    => trim($_POST['email'] ?? ''),
            'password' => $_POST['password'] ?? '',
            'status'   => (int)($_POST['status'] ?? 1),
        ];
        $editId = (int)($_POST['id'] ?? 0);

        $rules = [
            'name'  => 'required|max:100',
            'email' => 'required|email|unique:admins,email' . ($editId ? ",{$editId}" : ''),
        ];
        if (!$editId) {
            $rules['password'] = 'required|min:6';
        }

        $validator = new Validator($data);
        if ($validator->validate($rules)) {
            if ($editId) {
                $model->updateAdmin($editId, $data);
                Session::flash('success', 'Admin updated successfully.');
            } else {
                $model->createAdmin($data);
                Session::flash('success', 'Admin created successfully.');
            }
            clearOldInput();
            redirect('admins');
        } else {
            storeOldInput($data);
            Session::flash('error', $validator->firstError());
            redirect($editId ? "admins?action=edit&id={$editId}" : 'admins?action=create');
        }
    }
}

// ─── Handle GET ─────────────────────────────────────────────
if ($action === 'delete' && $id) {
    CSRF::validateOrDie();
    if ($id === Auth::id()) {
        Session::flash('error', 'You cannot delete your own account.');
    } else {
        $model->delete($id);
        Session::flash('success', 'Admin deleted.');
    }
    redirect('admins');
}
if ($action === 'toggle' && $id) {
    CSRF::validateOrDie();
    if ($id === Auth::id()) {
        Session::flash('error', 'You cannot deactivate your own account.');
    } else {
        $model->toggleStatus($id);
        Session::flash('success', 'Status updated.');
    }
    redirect('admins');
}

$admins = [];
$editItem = null;

if ($action === 'list') {
    $admins = $model->getAll(trim($_GET['search'] ?? ''));
} elseif ($action === 'edit' && $id) {
    $editItem = $model->find($id);
    if (!$editItem) { Session::flash('error', 'Admin not found.'); redirect('admins'); }
    $pageTitle = 'Edit Admin';
} elseif ($action === 'create') {
    $pageTitle = 'New Admin';
}

include 'partials/header.php';
include 'partials/sidebar.php';

if ($action === 'create' || $action === 'edit'):
    $item = $editItem ?? [];
?>

<div class="page-header">
    <div class="flex items-center gap-4">
        <a href="admins" class="w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white transition-all">
            <i class="fa-solid fa-arrow-left text-sm"></i>
        </a>
        <div>
            <h1 class="font-heading text-gray-900 dark:text-white"><?= $editItem ? 'Edit Admin' : 'New Admin' ?></h1>
            <p class="text-sm text-gray-500 mt-0.5"><?= $editItem ? 'Update admin account' : 'Create a new admin user' ?></p>
        </div>
    </div>
</div>

<form method="POST" action="admins" id="adminForm" class="max-w-2xl">
    <?= CSRF::field() ?>
    <input type="hidden" name="action" value="save">
    <?php if ($editItem): ?><input type="hidden" name="id" value="<?= $editItem['id'] ?>"><?php endif; ?>

    <div class="admin-card p-6 space-y-5">
        <div class="form-group">
            <label class="form-label">Full Name <span class="text-red-400">*</span></label>
            <input type="text" name="name" class="form-control" value="<?= e($item['name'] ?? old('name')) ?>" required>
        </div>
        <div class="form-group">
            <label class="form-label">Email <span class="text-red-400">*</span></label>
            <input type="email" name="email" class="form-control" value="<?= e($item['email'] ?? old('email')) ?>" required>
        </div>
        <div class="form-group">
            <label class="form-label">Password <?= $editItem ? '' : '<span class="text-red-400">*</span>' ?></label>
            <input type="password" name="password" class="form-control" placeholder="<?= $editItem ? 'Leave blank to keep current' : 'Min 6 characters' ?>" <?= $editItem ? '' : 'required' ?>>
        </div>
        <div class="form-group">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="1" <?= ($item['status'] ?? 1) == 1 ? 'selected' : '' ?>>Active</option>
                <option value="0" <?= ($item['status'] ?? 1) == 0 ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>
        <div class="flex items-center gap-3 pt-2">
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-check text-xs"></i> <?= $editItem ? 'Update' : 'Create' ?></button>
            <a href="admins" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</form>

<?php else: ?>

<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Admin Accounts</h1>
        <p class="text-sm text-gray-500 mt-0.5"><?= count($admins) ?> total admins</p>
    </div>
    <a href="admins?action=create" class="btn btn-primary"><i class="fa-solid fa-plus text-xs"></i> New Admin</a>
</div>

<div class="admin-card">
    <?php if (empty($admins)): ?>
    <div class="empty-state">
        <div class="empty-icon bg-gold-50 dark:bg-gold-500/5 text-gold-500"><i class="fa-solid fa-user-shield"></i></div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-2">No Admins</h3>
    </div>
    <?php else: ?>
    <div class="table-wrapper">
        <table class="admin-table">
            <thead><tr><th>Admin</th><th>Status</th><th>Created</th><th class="text-right">Actions</th></tr></thead>
            <tbody>
            <?php foreach ($admins as $a): ?>
                <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-gold-100 to-gold-200 dark:from-gold-500/10 dark:to-gold-500/5 flex items-center justify-center text-gold-700 dark:text-gold-400 font-bold text-xs">
                                <?= strtoupper(mb_substr($a['name'], 0, 2)) ?>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-white text-sm"><?= e($a['name']) ?> <?= $a['id'] === Auth::id() ? '<span class="text-[10px] text-gold-500 font-bold">(You)</span>' : '' ?></p>
                                <p class="text-[11px] text-gray-400"><?= e($a['email']) ?></p>
                            </div>
                        </div>
                    </td>
                    <td><?= statusBadge($a['status']) ?></td>
                    <td class="text-sm text-gray-500"><?= formatDate($a['created_at']) ?></td>
                    <td>
                        <div class="flex items-center justify-end gap-2">
                            <a href="admins?action=edit&id=<?= $a['id'] ?>" class="btn btn-secondary btn-icon" title="Edit"><i class="fa-solid fa-pen text-xs"></i></a>
                            <?php if ($a['id'] !== Auth::id()): ?>
                            <a href="admins?action=toggle&id=<?= $a['id'] ?>&_csrf_token=<?= CSRF::token() ?>" class="btn btn-secondary btn-icon" title="Toggle"><i class="fa-solid fa-power-off text-xs"></i></a>
                            <button onclick="confirmDelete('admins?action=delete&id=<?= $a['id'] ?>&_csrf_token=<?= CSRF::token() ?>', 'Admin')" class="btn btn-danger btn-icon" title="Delete"><i class="fa-solid fa-trash-can text-xs"></i></button>
                            <?php endif; ?>
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
