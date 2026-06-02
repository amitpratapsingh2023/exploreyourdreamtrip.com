<?php
/**
 * Tags — List, Create, Edit, Delete
 */
require_once __DIR__ . '/bootstrap.php';
Auth::requireLogin();

$pageTitle = 'Tags';
$model = new TagModel();
$action = $_GET['action'] ?? 'list';
$id = (int)($_GET['id'] ?? 0);

// ─── Handle POST ────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    CSRF::validateOrDie();
    $postAction = $_POST['action'] ?? '';

    if ($postAction === 'save') {
        $data = [
            'name'   => trim($_POST['name'] ?? ''),
            'slug'   => trim($_POST['slug'] ?? ''),
            'status' => (int)($_POST['status'] ?? 1),
        ];
        $editId = (int)($_POST['id'] ?? 0);

        $validator = new Validator($data);
        if ($validator->validate([
            'name' => 'required|max:100',
            'slug' => 'required|slug|max:120|unique:blog_tags,slug' . ($editId ? ",{$editId}" : ''),
        ])) {
            if ($editId) {
                $model->update($editId, $data);
                Session::flash('success', 'Tag updated successfully.');
            } else {
                $model->create($data);
                Session::flash('success', 'Tag created successfully.');
            }
            clearOldInput();
            redirect('tags');
        } else {
            storeOldInput($data);
            Session::flash('error', $validator->firstError());
            redirect($editId ? "tags?action=edit&id={$editId}" : 'tags?action=create');
        }
    }
}

// ─── Handle GET Actions ─────────────────────────────────────
if ($action === 'delete' && $id) {
    CSRF::validateOrDie();
    $model->delete($id);
    Session::flash('success', 'Tag deleted successfully.');
    redirect('tags');
}
if ($action === 'toggle' && $id) {
    CSRF::validateOrDie();
    $model->toggleStatus($id);
    Session::flash('success', 'Status updated.');
    redirect('tags');
}

$search = trim($_GET['search'] ?? '');
$tags = [];
$editItem = null;

if ($action === 'list') {
    $tags = $model->getAllWithCount($search);
} elseif ($action === 'edit' && $id) {
    $editItem = $model->find($id);
    if (!$editItem) { Session::flash('error', 'Tag not found.'); redirect('tags'); }
    $pageTitle = 'Edit Tag';
} elseif ($action === 'create') {
    $pageTitle = 'New Tag';
}

include 'partials/header.php';
include 'partials/sidebar.php';

if ($action === 'create' || $action === 'edit'):
    $item = $editItem ?? [];
?>

<div class="page-header">
    <div class="flex items-center gap-4">
        <a href="tags" class="w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white transition-all">
            <i class="fa-solid fa-arrow-left text-sm"></i>
        </a>
        <div>
            <h1 class="font-heading text-gray-900 dark:text-white"><?= $editItem ? 'Edit Tag' : 'New Tag' ?></h1>
            <p class="text-sm text-gray-500 mt-0.5"><?= $editItem ? 'Update tag details' : 'Create a new blog tag' ?></p>
        </div>
    </div>
</div>

<form method="POST" action="tags" id="tagForm" class="max-w-2xl">
    <?= CSRF::field() ?>
    <input type="hidden" name="action" value="save">
    <?php if ($editItem): ?><input type="hidden" name="id" value="<?= $editItem['id'] ?>"><?php endif; ?>

    <div class="admin-card p-6 space-y-5">
        <div class="form-group">
            <label class="form-label">Name <span class="text-red-400">*</span></label>
            <input type="text" name="name" class="form-control" value="<?= e($item['name'] ?? old('name')) ?>" placeholder="e.g. JavaScript" required data-slug-source="#tagSlug">
        </div>
        <div class="form-group">
            <label class="form-label">Slug <span class="text-red-400">*</span></label>
            <input type="text" name="slug" id="tagSlug" class="form-control" value="<?= e($item['slug'] ?? old('slug')) ?>" placeholder="javascript" required>
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
            <a href="tags" class="btn btn-secondary">Cancel</a>
        </div>
    </div>
</form>

<?php else: ?>

<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Tags</h1>
        <p class="text-sm text-gray-500 mt-0.5"><?= count($tags) ?> total tags</p>
    </div>
    <a href="tags?action=create" class="btn btn-primary"><i class="fa-solid fa-plus text-xs"></i> New Tag</a>
</div>

<div class="admin-card mb-6">
    <div class="p-5">
        <div class="relative max-w-md">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400"><i class="fa-solid fa-magnifying-glass text-sm"></i></div>
            <input type="text" class="table-search form-control pl-11" data-table="tagsTable" placeholder="Search tags...">
        </div>
    </div>
</div>

<div class="admin-card">
    <?php if (empty($tags)): ?>
    <div class="empty-state">
        <div class="empty-icon bg-blue-50 dark:bg-blue-500/5 text-blue-500"><i class="fa-solid fa-tags"></i></div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-2">No Tags Found</h3>
        <p class="text-sm text-gray-500 mt-1 mb-6">Create your first tag to organize blog posts.</p>
        <a href="tags?action=create" class="btn btn-primary"><i class="fa-solid fa-plus text-xs"></i> Create Tag</a>
    </div>
    <?php else: ?>
    <div class="table-wrapper">
        <table class="admin-table" id="tagsTable">
            <thead><tr><th>Name</th><th>Slug</th><th>Used In</th><th>Status</th><th>Created</th><th class="text-right">Actions</th></tr></thead>
            <tbody>
            <?php foreach ($tags as $tag): ?>
                <tr>
                    <td><span class="font-semibold text-gray-900 dark:text-white"><?= e($tag['name']) ?></span></td>
                    <td><code class="text-xs bg-gray-100 dark:bg-white/5 px-2 py-1 rounded-lg text-gray-600 dark:text-gray-400"><?= e($tag['slug']) ?></code></td>
                    <td><span class="text-sm"><?= $tag['usage_count'] ?> posts</span></td>
                    <td><?= statusBadge($tag['status']) ?></td>
                    <td class="text-sm text-gray-500"><?= formatDate($tag['created_at']) ?></td>
                    <td>
                        <div class="flex items-center justify-end gap-2">
                            <a href="tags?action=edit&id=<?= $tag['id'] ?>" class="btn btn-secondary btn-icon" title="Edit"><i class="fa-solid fa-pen text-xs"></i></a>
                            <a href="tags?action=toggle&id=<?= $tag['id'] ?>&_csrf_token=<?= CSRF::token() ?>" class="btn btn-secondary btn-icon" title="Toggle"><i class="fa-solid fa-power-off text-xs"></i></a>
                            <button onclick="confirmDelete('tags?action=delete&id=<?= $tag['id'] ?>&_csrf_token=<?= CSRF::token() ?>', 'Tag')" class="btn btn-danger btn-icon" title="Delete"><i class="fa-solid fa-trash-can text-xs"></i></button>
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
