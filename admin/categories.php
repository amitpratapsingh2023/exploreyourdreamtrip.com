<?php
/**
 * Categories — List, Create, Edit, Delete
 */
require_once __DIR__ . '/bootstrap.php';
Auth::requireLogin();

$pageTitle = 'Categories';
$model = new CategoryModel();
$action = $_GET['action'] ?? 'list';
$id = (int)($_GET['id'] ?? 0);

// ─── Handle POST Actions ────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    CSRF::validateOrDie();

    $postAction = $_POST['action'] ?? '';

    if ($postAction === 'save') {
        $data = [
            'name'             => trim($_POST['name'] ?? ''),
            'slug'             => trim($_POST['slug'] ?? ''),
            'description'      => trim($_POST['description'] ?? ''),
            'meta_title'       => trim($_POST['meta_title'] ?? ''),
            'meta_description' => trim($_POST['meta_description'] ?? ''),
            'meta_keywords'    => trim($_POST['meta_keywords'] ?? ''),
            'status'           => (int)($_POST['status'] ?? 1),
        ];

        $editId = (int)($_POST['id'] ?? 0);

        // Validate
        $validator = new Validator($data);
        $rules = [
            'name' => 'required|max:100',
            'slug' => 'required|slug|max:120|unique:blog_categories,slug' . ($editId ? ",{$editId}" : ''),
        ];
        if ($validator->validate($rules)) {
            if ($editId) {
                $model->update($editId, $data);
                Session::flash('success', 'Category updated successfully.');
            } else {
                $model->create($data);
                Session::flash('success', 'Category created successfully.');
            }
            clearOldInput();
            redirect('categories');
        } else {
            storeOldInput($data);
            Session::flash('error', $validator->firstError());
            redirect($editId ? "categories?action=edit&id={$editId}" : 'categories?action=create');
        }
    }
}

// ─── Handle GET Actions ─────────────────────────────────────
if ($action === 'delete' && $id) {
    CSRF::validateOrDie();
    if ($model->hasBlogPosts($id)) {
        Session::flash('error', 'Cannot delete: category has associated blog posts.');
    } else {
        $model->delete($id);
        Session::flash('success', 'Category deleted successfully.');
    }
    redirect('categories');
}

if ($action === 'toggle' && $id) {
    CSRF::validateOrDie();
    $model->toggleStatus($id);
    Session::flash('success', 'Status updated.');
    redirect('categories');
}

// ─── Prepare Data for Views ─────────────────────────────────
$search = trim($_GET['search'] ?? '');
$categories = [];
$editItem = null;

if ($action === 'list') {
    $categories = $model->getAllWithCount($search);
} elseif ($action === 'edit' && $id) {
    $editItem = $model->find($id);
    if (!$editItem) {
        Session::flash('error', 'Category not found.');
        redirect('categories');
    }
    $pageTitle = 'Edit Category';
} elseif ($action === 'create') {
    $pageTitle = 'New Category';
}

include 'partials/header.php';
include 'partials/sidebar.php';

// ─── CREATE / EDIT FORM ─────────────────────────────────────
if ($action === 'create' || $action === 'edit'):
    $item = $editItem ?? [];
?>

<div class="page-header">
    <div class="flex items-center gap-4">
        <a href="categories" class="w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white hover:border-gray-300 transition-all">
            <i class="fa-solid fa-arrow-left text-sm"></i>
        </a>
        <div>
            <h1 class="font-heading text-gray-900 dark:text-white"><?= $editItem ? 'Edit Category' : 'New Category' ?></h1>
            <p class="text-sm text-gray-500 mt-0.5"><?= $editItem ? 'Update category details' : 'Create a new blog category' ?></p>
        </div>
    </div>
</div>

<form method="POST" action="categories" id="categoryForm" class="max-w-4xl">
    <?= CSRF::field() ?>
    <input type="hidden" name="action" value="save">
    <?php if ($editItem): ?>
    <input type="hidden" name="id" value="<?= $editItem['id'] ?>">
    <?php endif; ?>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Details -->
        <div class="lg:col-span-2 space-y-6">
            <div class="admin-card p-6 space-y-5">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white">Category Details</h3>
                <div class="form-group">
                    <label class="form-label">Name <span class="text-red-400">*</span></label>
                    <input type="text" name="name" class="form-control" value="<?= e($item['name'] ?? old('name')) ?>" placeholder="e.g. Web Development" required data-slug-source="#slug">
                </div>
                <div class="form-group">
                    <label class="form-label">Slug <span class="text-red-400">*</span></label>
                    <input type="text" name="slug" id="slug" class="form-control" value="<?= e($item['slug'] ?? old('slug')) ?>" placeholder="web-development" required>
                </div>
                <div class="form-group mb-0">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Brief description of this category..."><?= e($item['description'] ?? old('description')) ?></textarea>
                </div>
            </div>

            <!-- SEO Section -->
            <div class="admin-card p-6 space-y-5">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white flex items-center gap-2">
                    <i class="fa-solid fa-magnifying-glass-chart text-sm text-gold-500"></i> SEO Settings
                </h3>
                <div class="form-group">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="<?= e($item['meta_title'] ?? old('meta_title')) ?>" placeholder="SEO page title">
                </div>
                <div class="form-group">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="2" placeholder="SEO meta description..."><?= e($item['meta_description'] ?? old('meta_description')) ?></textarea>
                </div>
                <div class="form-group mb-0">
                    <label class="form-label">Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control" value="<?= e($item['meta_keywords'] ?? old('meta_keywords')) ?>" placeholder="keyword1, keyword2, keyword3">
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <div class="admin-card p-6">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white mb-5">Publish</h3>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" <?= ($item['status'] ?? 1) == 1 ? 'selected' : '' ?>>Active</option>
                        <option value="0" <?= ($item['status'] ?? 1) == 0 ? 'selected' : '' ?>>Inactive</option>
                    </select>
                </div>
                <div class="flex items-center gap-3 pt-2">
                    <button type="submit" class="btn btn-primary flex-1">
                        <i class="fa-solid fa-check text-xs"></i>
                        <?= $editItem ? 'Update' : 'Create' ?>
                    </button>
                    <a href="categories" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
// ─── LIST VIEW ──────────────────────────────────────────────
else: ?>

<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Categories</h1>
        <p class="text-sm text-gray-500 mt-0.5"><?= count($categories) ?> total categories</p>
    </div>
    <a href="categories?action=create" class="btn btn-primary">
        <i class="fa-solid fa-plus text-xs"></i> New Category
    </a>
</div>

<!-- Search + Filters -->
<div class="admin-card mb-6">
    <div class="p-5 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
        <div class="relative flex-1">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
            </div>
            <input type="text" class="table-search form-control pl-11" data-table="categoriesTable" placeholder="Search categories..." value="<?= e($search) ?>">
        </div>
    </div>
</div>

<!-- Table -->
<div class="admin-card">
    <?php if (empty($categories)): ?>
    <div class="empty-state">
        <div class="empty-icon bg-gold-50 dark:bg-gold-500/5 text-gold-500">
            <i class="fa-solid fa-folder-tree"></i>
        </div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-2">No Categories Found</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1 mb-6">Get started by creating your first blog category.</p>
        <a href="categories?action=create" class="btn btn-primary"><i class="fa-solid fa-plus text-xs"></i> Create Category</a>
    </div>
    <?php else: ?>
    <div class="table-wrapper">
        <table class="admin-table" id="categoriesTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Posts</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $cat): ?>
                <tr>
                    <td>
                        <p class="font-semibold text-gray-900 dark:text-white"><?= e($cat['name']) ?></p>
                    </td>
                    <td><code class="text-xs bg-gray-100 dark:bg-white/5 px-2 py-1 rounded-lg text-gray-600 dark:text-gray-400"><?= e($cat['slug']) ?></code></td>
                    <td><span class="text-sm font-medium"><?= $cat['blog_count'] ?></span></td>
                    <td><?= statusBadge($cat['status']) ?></td>
                    <td class="text-sm text-gray-500"><?= formatDate($cat['created_at']) ?></td>
                    <td>
                        <div class="flex items-center justify-end gap-2">
                            <a href="categories?action=edit&id=<?= $cat['id'] ?>" class="btn btn-secondary btn-icon" title="Edit">
                                <i class="fa-solid fa-pen text-xs"></i>
                            </a>
                            <a href="categories?action=toggle&id=<?= $cat['id'] ?>&_csrf_token=<?= CSRF::token() ?>" class="btn btn-secondary btn-icon" title="Toggle status">
                                <i class="fa-solid fa-power-off text-xs"></i>
                            </a>
                            <button onclick="confirmDelete('categories?action=delete&id=<?= $cat['id'] ?>&_csrf_token=<?= CSRF::token() ?>', 'Category')" class="btn btn-danger btn-icon" title="Delete">
                                <i class="fa-solid fa-trash-can text-xs"></i>
                            </button>
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

<?php
$pageScripts = <<<'JS'
<script>
$(function() {
    $('#categoryForm').on('submit', function(e) {
        if (!validateForm('categoryForm', {
            name: ['required', 'max:100'],
            slug: ['required']
        })) {
            e.preventDefault();
        }
    });
});
</script>
JS;
include 'partials/footer.php';
?>
