<?php
/**
 * Authors — List, Create, Edit, Delete
 */
require_once __DIR__ . '/bootstrap.php';
Auth::requireLogin();

$pageTitle = 'Authors';
$model = new AuthorModel();
$action = $_GET['action'] ?? 'list';
$id = (int)($_GET['id'] ?? 0);

// ─── Handle POST ────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    CSRF::validateOrDie();
    $postAction = $_POST['action'] ?? '';

    if ($postAction === 'save') {
        $data = [
            'name'            => trim($_POST['name'] ?? ''),
            'slug'            => trim($_POST['slug'] ?? ''),
            'email'           => trim($_POST['email'] ?? ''),
            'bio'             => trim($_POST['bio'] ?? ''),
            'designation'     => trim($_POST['designation'] ?? ''),
            'social_twitter'  => trim($_POST['social_twitter'] ?? ''),
            'social_linkedin' => trim($_POST['social_linkedin'] ?? ''),
            'status'          => (int)($_POST['status'] ?? 1),
        ];
        $editId = (int)($_POST['id'] ?? 0);

        // Handle avatar upload
        if (!empty($_FILES['avatar']['name'])) {
            $oldAvatarPath = null;
            if ($editId) {
                $oldAuthor = $model->find($editId);
                $oldAvatarPath = $oldAuthor['avatar'] ?? null;
            }

            $avatarPath = uploadImage($_FILES['avatar'], 'authors', slugify($data['name']));
            if ($avatarPath) {
                if ($oldAvatarPath && $oldAvatarPath !== $avatarPath) {
                    deleteUploadedFile($oldAvatarPath);
                }
                $data['avatar'] = $avatarPath;
            } else {
                Session::flash('error', 'Avatar upload failed. Max 1MB, images only.');
                storeOldInput($data);
                redirect($editId ? "authors?action=edit&id={$editId}" : 'authors?action=create');
            }
        }

        $validator = new Validator($data);
        if ($validator->validate([
            'name'  => 'required|max:100',
            'slug'  => 'required|slug|max:120|unique:authors,slug' . ($editId ? ",{$editId}" : ''),
            'email' => 'email',
        ])) {
            if ($editId) {
                $model->update($editId, $data);
                Session::flash('success', 'Author updated successfully.');
            } else {
                $model->create($data);
                Session::flash('success', 'Author created successfully.');
            }
            clearOldInput();
            redirect('authors');
        } else {
            storeOldInput($data);
            Session::flash('error', $validator->firstError());
            redirect($editId ? "authors?action=edit&id={$editId}" : 'authors?action=create');
        }
    }
}

// ─── Handle GET Actions ─────────────────────────────────────
if ($action === 'delete' && $id) {
    CSRF::validateOrDie();
    $author = $model->find($id);
    if ($author && $author['avatar']) deleteUploadedFile($author['avatar']);
    $model->delete($id);
    Session::flash('success', 'Author deleted successfully.');
    redirect('authors');
}
if ($action === 'toggle' && $id) {
    CSRF::validateOrDie();
    $model->toggleStatus($id);
    Session::flash('success', 'Status updated.');
    redirect('authors');
}

$search = trim($_GET['search'] ?? '');
$authors = [];
$editItem = null;

if ($action === 'list') {
    $authors = $model->getAll($search);
} elseif ($action === 'edit' && $id) {
    $editItem = $model->find($id);
    if (!$editItem) { Session::flash('error', 'Author not found.'); redirect('authors'); }
    $pageTitle = 'Edit Author';
} elseif ($action === 'create') {
    $pageTitle = 'New Author';
}

include 'partials/header.php';
include 'partials/sidebar.php';

$authorPlaceholder = adminMediaSrc('assets/images/authors/author-placeholder.svg');

if ($action === 'create' || $action === 'edit'):
    $item = $editItem ?? [];
?>

<div class="page-header">
    <div class="flex items-center gap-4">
        <a href="authors" class="w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white transition-all">
            <i class="fa-solid fa-arrow-left text-sm"></i>
        </a>
        <div>
            <h1 class="font-heading text-gray-900 dark:text-white"><?= $editItem ? 'Edit Author' : 'New Author' ?></h1>
            <p class="text-sm text-gray-500 mt-0.5"><?= $editItem ? 'Update author profile' : 'Add a new blog author' ?></p>
        </div>
    </div>
</div>

<form method="POST" action="authors" enctype="multipart/form-data" id="authorForm" class="max-w-4xl">
    <?= CSRF::field() ?>
    <input type="hidden" name="action" value="save">
    <?php if ($editItem): ?><input type="hidden" name="id" value="<?= $editItem['id'] ?>"><?php endif; ?>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-6">
            <div class="admin-card p-6 space-y-5">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white">Author Details</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="form-group">
                        <label class="form-label">Name <span class="text-red-400">*</span></label>
                        <input type="text" name="name" class="form-control" value="<?= e($item['name'] ?? old('name')) ?>" required data-slug-source="#authorSlug">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Slug <span class="text-red-400">*</span></label>
                        <input type="text" name="slug" id="authorSlug" class="form-control" value="<?= e($item['slug'] ?? old('slug')) ?>" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= e($item['email'] ?? old('email')) ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Designation</label>
                        <input type="text" name="designation" class="form-control" value="<?= e($item['designation'] ?? old('designation')) ?>" placeholder="e.g. Digital Strategist">
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="form-label">Bio</label>
                    <textarea name="bio" class="form-control" rows="4" placeholder="Brief author biography..."><?= e($item['bio'] ?? old('bio')) ?></textarea>
                </div>
            </div>

            <div class="admin-card p-6 space-y-5">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white flex items-center gap-2">
                    <i class="fa-solid fa-share-nodes text-sm text-gold-500"></i> Social Links
                </h3>
                <div class="form-group">
                    <label class="form-label">Twitter / X URL</label>
                    <input type="url" name="social_twitter" class="form-control" value="<?= e($item['social_twitter'] ?? old('social_twitter')) ?>" placeholder="https://twitter.com/...">
                </div>
                <div class="form-group mb-0">
                    <label class="form-label">LinkedIn URL</label>
                    <input type="url" name="social_linkedin" class="form-control" value="<?= e($item['social_linkedin'] ?? old('social_linkedin')) ?>" placeholder="https://linkedin.com/in/...">
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <!-- Avatar Upload -->
            <div class="admin-card p-6">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white mb-5">Avatar</h3>
                <div class="flex flex-col items-center gap-4">
                    <?php if (!empty($item['avatar'])): ?>
                    <img src="<?= e(adminMediaSrc($item['avatar'])) ?>" alt="Avatar" class="w-24 h-24 rounded-2xl object-cover border-2 border-gray-100 dark:border-white/10" id="avatarPreview" onerror="this.onerror=null;this.src='<?= e($authorPlaceholder) ?>';">
                    <?php else: ?>
                    <div class="w-24 h-24 rounded-2xl bg-gray-100 dark:bg-white/5 flex items-center justify-center text-gray-400 text-3xl" id="avatarPlaceholder">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <img src="<?= e($authorPlaceholder) ?>" alt="Avatar" class="w-24 h-24 rounded-2xl object-cover border-2 border-gray-100 dark:border-white/10 hidden" id="avatarPreview" onerror="this.onerror=null;this.src='<?= e($authorPlaceholder) ?>';">
                    <?php endif; ?>
                    <label class="btn btn-secondary btn-sm cursor-pointer">
                        <i class="fa-solid fa-cloud-arrow-up text-xs"></i> Upload
                        <input type="file" name="avatar" accept="image/*" class="hidden image-upload" data-preview="#avatarPreview" data-placeholder="#avatarPlaceholder">
                    </label>
                    <p class="text-[11px] text-gray-400">Max 1MB · JPG, PNG, WebP</p>
                </div>
            </div>

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
                    <button type="submit" class="btn btn-primary flex-1"><i class="fa-solid fa-check text-xs"></i> <?= $editItem ? 'Update' : 'Create' ?></button>
                    <a href="authors" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

<?php else: ?>

<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Authors</h1>
        <p class="text-sm text-gray-500 mt-0.5"><?= count($authors) ?> total authors</p>
    </div>
    <a href="authors?action=create" class="btn btn-primary"><i class="fa-solid fa-plus text-xs"></i> New Author</a>
</div>

<div class="admin-card">
    <?php if (empty($authors)): ?>
    <div class="empty-state">
        <div class="empty-icon bg-purple-50 dark:bg-purple-500/5 text-purple-500"><i class="fa-solid fa-pen-fancy"></i></div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-2">No Authors Found</h3>
        <p class="text-sm text-gray-500 mt-1 mb-6">Add authors to credit your blog content.</p>
        <a href="authors?action=create" class="btn btn-primary"><i class="fa-solid fa-plus text-xs"></i> Add Author</a>
    </div>
    <?php else: ?>
    <div class="table-wrapper">
        <table class="admin-table" id="authorsTable">
            <thead><tr><th>Author</th><th>Designation</th><th>Posts</th><th>Status</th><th class="text-right">Actions</th></tr></thead>
            <tbody>
            <?php foreach ($authors as $a): ?>
                <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <?php if ($a['avatar']): ?>
                            <img src="<?= e(adminMediaSrc($a['avatar'])) ?>" class="w-9 h-9 rounded-xl object-cover" onerror="this.onerror=null;this.src='<?= e($authorPlaceholder) ?>';">
                            <?php else: ?>
                            <img src="<?= e($authorPlaceholder) ?>" alt="<?= e($a['name']) ?>" class="w-9 h-9 rounded-xl object-cover">
                            <?php endif; ?>
                            <div>
                                <p class="font-semibold text-gray-900 dark:text-white text-sm"><?= e($a['name']) ?></p>
                                <p class="text-[11px] text-gray-400"><?= e($a['email'] ?? '') ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="text-sm text-gray-600 dark:text-gray-400"><?= e($a['designation'] ?? '—') ?></td>
                    <td><span class="text-sm font-medium"><?= $a['blog_count'] ?></span></td>
                    <td><?= statusBadge($a['status']) ?></td>
                    <td>
                        <div class="flex items-center justify-end gap-2">
                            <a href="authors?action=edit&id=<?= $a['id'] ?>" class="btn btn-secondary btn-icon" title="Edit"><i class="fa-solid fa-pen text-xs"></i></a>
                            <button onclick="confirmDelete('authors?action=delete&id=<?= $a['id'] ?>&_csrf_token=<?= CSRF::token() ?>', 'Author')" class="btn btn-danger btn-icon" title="Delete"><i class="fa-solid fa-trash-can text-xs"></i></button>
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
