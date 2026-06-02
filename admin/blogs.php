<?php
/**
 * Blog Posts — List, Create, Edit, Delete
 */
require_once __DIR__ . '/bootstrap.php';
Auth::requireLogin();

$pageTitle = 'Blog Posts';
$useCKEditor = false;
$model = new BlogModel();
$categoryModel = new CategoryModel();
$tagModel = new TagModel();
$authorModel = new AuthorModel();
$action = $_GET['action'] ?? 'list';
$id = (int)($_GET['id'] ?? 0);

// ─── Handle POST ────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    CSRF::validateOrDie();
    $postAction = $_POST['action'] ?? '';

    if ($postAction === 'save') {
        $data = [
            'title'             => trim($_POST['title'] ?? ''),
            'slug'              => trim($_POST['slug'] ?? ''),
            'category_id'       => ((int)($_POST['category_id'] ?? 0)) ?: null,
            'author_id'         => ((int)($_POST['author_id'] ?? 0)) ?: null,
            'short_description' => trim($_POST['short_description'] ?? ''),
            'description'       => $_POST['description'] ?? '',
            'status'            => $_POST['status'] ?? 'draft',
            'featured'          => (int)($_POST['featured'] ?? 0),
            'published_at'      => !empty($_POST['published_at']) ? $_POST['published_at'] : null,
            'image_alt'         => trim($_POST['image_alt'] ?? ''),
            'image_title'       => trim($_POST['image_title'] ?? ''),
            'meta_title'        => trim($_POST['meta_title'] ?? ''),
            'meta_description'  => trim($_POST['meta_description'] ?? ''),
            'meta_keywords'     => trim($_POST['meta_keywords'] ?? ''),
            'canonical_url'     => trim($_POST['canonical_url'] ?? ''),
            'og_title'          => trim($_POST['og_title'] ?? ''),
            'og_description'    => trim($_POST['og_description'] ?? ''),
            'og_image'          => trim($_POST['og_image'] ?? ''),
            'schema_json'       => trim($_POST['schema_json'] ?? ''),
        ];
        $editId = (int)($_POST['id'] ?? 0);
        $tagIds = $_POST['tags'] ?? [];

        // Auto-set published_at for published posts
        if ($data['status'] === 'published' && !$data['published_at']) {
            $data['published_at'] = date('Y-m-d H:i:s');
        }

        // Handle image upload
        if (!empty($_FILES['image']['name'])) {
            $oldImagePath = null;
            if ($editId) {
                $oldPost = $model->find($editId);
                $oldImagePath = $oldPost['image'] ?? null;
            }

            $imagePath = uploadImage($_FILES['image'], 'blogs', $data['slug']);
            if ($imagePath) {
                // Delete old image if editing
                if ($oldImagePath && $oldImagePath !== $imagePath) {
                    deleteUploadedFile($oldImagePath);
                }
                $data['image'] = $imagePath;
            } else {
                Session::flash('error', 'Image upload failed. Max 1MB, images only.');
                storeOldInput($data);
                redirect($editId ? "blogs?action=edit&id={$editId}" : 'blogs?action=create');
            }
        }

        // Validate
        $validator = new Validator($data);
        $rules = [
            'title'  => 'required|max:255',
            'slug'   => 'required|slug|max:255|unique:blogs,slug' . ($editId ? ",{$editId}" : ''),
            'status' => 'required|in:draft,published,scheduled',
        ];
        if ($data['status'] === 'scheduled') {
            $rules['published_at'] = 'required';
        }

        if ($validator->validate($rules)) {
            if ($editId) {
                $model->updateWithTags($editId, $data, $tagIds);
                Session::flash('success', 'Blog post updated successfully.');
            } else {
                $model->createWithTags($data, $tagIds);
                Session::flash('success', 'Blog post created successfully.');
            }
            clearOldInput();
            redirect('blogs');
        } else {
            storeOldInput($data);
            Session::flash('error', $validator->firstError());
            redirect($editId ? "blogs?action=edit&id={$editId}" : 'blogs?action=create');
        }
    }
}

// ─── Handle GET Actions ─────────────────────────────────────
if ($action === 'delete' && $id) {
    CSRF::validateOrDie();
    $post = $model->find($id);
    if ($post && $post['image']) deleteUploadedFile($post['image']);
    $model->delete($id);
    Session::flash('success', 'Blog post deleted.');
    redirect('blogs');
}

// ─── Prepare Data ───────────────────────────────────────────
$search = trim($_GET['search'] ?? '');
$statusFilter = $_GET['status'] ?? '';
$blogs = [];
$editItem = null;

if ($action === 'list') {
    $blogs = $model->getAllWithRelations($search, $statusFilter);
} elseif ($action === 'edit' && $id) {
    $editItem = $model->getWithRelations($id);
    if (!$editItem) { Session::flash('error', 'Post not found.'); redirect('blogs'); }
    $editItem['tag_ids'] = $model->getTagIds($id);
    $pageTitle = 'Edit Post';
    $useCKEditor = true;
} elseif ($action === 'create') {
    $pageTitle = 'New Post';
    $useCKEditor = true;
}

include 'partials/header.php';
include 'partials/sidebar.php';

// ─── CREATE / EDIT FORM ─────────────────────────────────────
if ($action === 'create' || $action === 'edit'):
    $item = $editItem ?? [];
    $categories = $categoryModel->getActive();
    $tags = $tagModel->getActive();
    $authors = $authorModel->getActive();
?>

<div class="page-header">
    <div class="flex items-center gap-4">
        <a href="blogs" class="w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white transition-all">
            <i class="fa-solid fa-arrow-left text-sm"></i>
        </a>
        <div>
            <h1 class="font-heading text-gray-900 dark:text-white"><?= $editItem ? 'Edit Post' : 'New Post' ?></h1>
            <p class="text-sm text-gray-500 mt-0.5"><?= $editItem ? 'Update blog post' : 'Create a new blog post' ?></p>
        </div>
    </div>
</div>

<form method="POST" action="blogs" enctype="multipart/form-data" id="blogForm">
    <?= CSRF::field() ?>
    <input type="hidden" name="action" value="save">
    <?php if ($editItem): ?><input type="hidden" name="id" value="<?= $editItem['id'] ?>"><?php endif; ?>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">

        <!-- Main Content -->
        <div class="xl:col-span-2 space-y-6">

            <!-- Title + Slug -->
            <div class="admin-card p-6 space-y-5">
                <div class="form-group">
                    <label class="form-label">Title <span class="text-red-400">*</span></label>
                    <input type="text" name="title" class="form-control text-lg font-semibold" value="<?= e($item['title'] ?? old('title')) ?>" placeholder="Enter blog title..." required data-slug-source="#blogSlug">
                </div>
                <div class="form-group">
                    <label class="form-label">Slug <span class="text-red-400">*</span></label>
                    <div class="flex items-center gap-2">
                        <span class="text-sm text-gray-400 hidden sm:inline">/blog/</span>
                        <input type="text" name="slug" id="blogSlug" class="form-control flex-1" value="<?= e($item['slug'] ?? old('slug')) ?>" required>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="form-label">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="2" placeholder="Brief excerpt for listings..."><?= e($item['short_description'] ?? old('short_description')) ?></textarea>
                </div>
            </div>

            <!-- Rich Content Editor -->
            <div class="admin-card p-6">
                <label class="form-label mb-3">Content</label>
                <textarea name="description" id="editor"><?= e($item['description'] ?? old('description')) ?></textarea>
            </div>

            <!-- SEO Settings -->
            <div class="admin-card p-6 space-y-5">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white flex items-center gap-2">
                    <i class="fa-solid fa-magnifying-glass-chart text-sm text-gold-500"></i> SEO Settings
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="form-group"><label class="form-label">Meta Title</label><input type="text" name="meta_title" class="form-control" value="<?= e($item['meta_title'] ?? '') ?>"></div>
                    <div class="form-group"><label class="form-label">Meta Keywords</label><input type="text" name="meta_keywords" class="form-control" value="<?= e($item['meta_keywords'] ?? '') ?>"></div>
                </div>
                <div class="form-group"><label class="form-label">Meta Description</label><textarea name="meta_description" class="form-control" rows="2"><?= e($item['meta_description'] ?? '') ?></textarea></div>
                <div class="form-group"><label class="form-label">Canonical URL</label><input type="url" name="canonical_url" class="form-control" value="<?= e($item['canonical_url'] ?? '') ?>"></div>

                <!-- OG Tags -->
                <details class="group">
                    <summary class="text-xs font-bold text-gray-400 uppercase tracking-wider cursor-pointer hover:text-gold-500 transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-chevron-right text-[10px] group-open:rotate-90 transition-transform"></i> Open Graph Tags
                    </summary>
                    <div class="mt-5 space-y-5 pl-4 border-l-2 border-gold-200 dark:border-gold-500/20">
                        <div class="form-group"><label class="form-label">OG Title</label><input type="text" name="og_title" class="form-control" value="<?= e($item['og_title'] ?? '') ?>"></div>
                        <div class="form-group"><label class="form-label">OG Description</label><textarea name="og_description" class="form-control" rows="2"><?= e($item['og_description'] ?? '') ?></textarea></div>
                        <div class="form-group"><label class="form-label">OG Image URL</label><input type="url" name="og_image" class="form-control" value="<?= e($item['og_image'] ?? '') ?>"></div>
                    </div>
                </details>

                <!-- Schema JSON -->
                <details class="group">
                    <summary class="text-xs font-bold text-gray-400 uppercase tracking-wider cursor-pointer hover:text-gold-500 transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-chevron-right text-[10px] group-open:rotate-90 transition-transform"></i> Schema JSON-LD
                    </summary>
                    <div class="mt-5 pl-4 border-l-2 border-gold-200 dark:border-gold-500/20">
                        <textarea name="schema_json" class="form-control font-mono text-xs" rows="6" placeholder='{"@context":"https://schema.org",...}'><?= e($item['schema_json'] ?? '') ?></textarea>
                    </div>
                </details>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">

            <!-- Publish Box -->
            <div class="admin-card p-6 space-y-5">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white">Publish</h3>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control" id="blogStatus">
                        <option value="draft" <?= ($item['status'] ?? 'draft') === 'draft' ? 'selected' : '' ?>>Draft</option>
                        <option value="published" <?= ($item['status'] ?? '') === 'published' ? 'selected' : '' ?>>Published</option>
                        <option value="scheduled" <?= ($item['status'] ?? '') === 'scheduled' ? 'selected' : '' ?>>Scheduled</option>
                    </select>
                </div>
                <div class="form-group <?= ($item['status'] ?? '') === 'scheduled' ? '' : 'hidden' ?>" id="scheduledDateGroup">
                    <label class="form-label">Publish Date</label>
                    <input type="datetime-local" name="published_at" class="form-control" value="<?= $item['published_at'] ?? '' ?>" id="publishedAt">
                </div>
                <div class="flex items-center gap-3">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="featured" value="1" class="custom-checkbox" <?= ($item['featured'] ?? 0) ? 'checked' : '' ?>>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Featured Post</span>
                    </label>
                </div>
                <div class="flex items-center gap-3 pt-2 border-t border-gray-100 dark:border-white/5">
                    <button type="submit" class="btn btn-primary flex-1"><i class="fa-solid fa-check text-xs"></i> <?= $editItem ? 'Update' : 'Create' ?></button>
                    <a href="blogs" class="btn btn-secondary">Cancel</a>
                </div>
            </div>

            <!-- Category -->
            <div class="admin-card p-6">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white mb-4">Category</h3>
                <select name="category_id" class="form-control">
                    <option value="">— Select Category —</option>
                    <?php foreach ($categories as $cat): ?>
                    <option value="<?= $cat['id'] ?>" <?= ($item['category_id'] ?? '') == $cat['id'] ? 'selected' : '' ?>><?= e($cat['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Author -->
            <div class="admin-card p-6">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white mb-4">Author</h3>
                <select name="author_id" class="form-control">
                    <option value="">— Select Author —</option>
                    <?php foreach ($authors as $a): ?>
                    <option value="<?= $a['id'] ?>" <?= ($item['author_id'] ?? '') == $a['id'] ? 'selected' : '' ?>><?= e($a['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Tags -->
            <div class="admin-card p-6">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white mb-4">Tags</h3>
                <?php if (empty($tags)): ?>
                    <p class="text-sm text-gray-400">No tags available. <a href="tags?action=create" class="text-gold-500 font-semibold">Create one</a></p>
                <?php else: ?>
                <div class="space-y-2 max-h-48 overflow-y-auto pr-2">
                    <?php
                    $selectedTags = $item['tag_ids'] ?? [];
                    foreach ($tags as $tag):
                    ?>
                    <label class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-white/[0.02] cursor-pointer transition-colors">
                        <input type="checkbox" name="tags[]" value="<?= $tag['id'] ?>" class="custom-checkbox" <?= in_array($tag['id'], $selectedTags) ? 'checked' : '' ?>>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300"><?= e($tag['name']) ?></span>
                    </label>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- Featured Image -->
            <div class="admin-card p-6">
                <h3 class="font-heading text-base font-bold text-gray-900 dark:text-white mb-4">Featured Image</h3>
                <div class="image-preview-wrapper <?= empty($item['image']) ? 'hidden' : '' ?> mb-4">
                    <img src="<?= e(adminMediaSrc($item['image'] ?? null)) ?>" alt="" class="w-full rounded-xl object-cover border border-gray-100 dark:border-white/10" id="imagePreview">
                </div>
                <label class="btn btn-secondary w-full cursor-pointer">
                    <i class="fa-solid fa-cloud-arrow-up text-xs"></i> Upload Image
                    <input type="file" name="image" accept="image/*" class="hidden image-upload" data-preview="#imagePreview">
                </label>
                <p class="text-[11px] text-gray-400 mt-2 text-center">Max 1MB · JPG, PNG, WebP</p>
                <div class="space-y-3 mt-4">
                    <div class="form-group mb-0"><label class="form-label">Image Alt</label><input type="text" name="image_alt" class="form-control" value="<?= e($item['image_alt'] ?? '') ?>"></div>
                    <div class="form-group mb-0"><label class="form-label">Image Title</label><input type="text" name="image_title" class="form-control" value="<?= e($item['image_title'] ?? '') ?>"></div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
// ─── LIST VIEW ──────────────────────────────────────────────
else:
    $blogStats = $model->getStats();
?>

<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Blog Posts</h1>
        <p class="text-sm text-gray-500 mt-0.5"><?= $blogStats['total'] ?> total posts</p>
    </div>
    <a href="blogs?action=create" class="btn btn-primary"><i class="fa-solid fa-plus text-xs"></i> New Post</a>
</div>

<!-- Status Tabs -->
<div class="flex flex-wrap items-center gap-2 mb-6">
    <?php
    $blogFilters = [
        '' => ['All', $blogStats['total']],
        'published' => ['Published', $blogStats['published']],
        'draft' => ['Drafts', $blogStats['draft']],
        'scheduled' => ['Scheduled', $blogStats['scheduled']],
    ];
    foreach ($blogFilters as $key => $f):
        $isActive = $statusFilter === $key;
    ?>
    <a href="blogs<?= $key ? "?status={$key}" : '' ?>" class="px-4 py-2 rounded-xl text-xs font-bold transition-all <?= $isActive ? 'bg-gold-500 text-dark-900 shadow-lg' : 'bg-gray-100 dark:bg-white/5 text-gray-600 dark:text-gray-400' ?> hover:-translate-y-0.5">
        <?= $f[0] ?> <span class="ml-1 opacity-70"><?= $f[1] ?></span>
    </a>
    <?php endforeach; ?>
</div>

<!-- Search -->
<div class="admin-card mb-6">
    <div class="p-5">
        <div class="relative max-w-md">
            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400"><i class="fa-solid fa-magnifying-glass text-sm"></i></div>
            <input type="text" class="table-search form-control pl-11" data-table="blogsTable" placeholder="Search posts...">
        </div>
    </div>
</div>

<div class="admin-card">
    <?php if (empty($blogs)): ?>
    <div class="empty-state">
        <div class="empty-icon bg-gold-50 dark:bg-gold-500/5 text-gold-500"><i class="fa-solid fa-newspaper"></i></div>
        <h3 class="text-lg font-bold text-gray-900 dark:text-white mt-2">No Posts Found</h3>
        <p class="text-sm text-gray-500 mt-1 mb-6">Start creating engaging content for your audience.</p>
        <a href="blogs?action=create" class="btn btn-primary"><i class="fa-solid fa-plus text-xs"></i> Create Post</a>
    </div>
    <?php else: ?>
    <div class="table-wrapper">
        <table class="admin-table" id="blogsTable">
            <thead><tr><th>Post</th><th>Category</th><th>Author</th><th>Status</th><th>Date</th><th class="text-right">Actions</th></tr></thead>
            <tbody>
            <?php foreach ($blogs as $blog): ?>
                <tr>
                    <td>
                        <div class="flex items-center gap-3">
                            <?php if ($blog['image']): ?>
                            <img src="<?= e(adminMediaSrc($blog['image'])) ?>" class="w-12 h-9 rounded-lg object-cover shrink-0 border border-gray-100 dark:border-white/5">
                            <?php else: ?>
                            <div class="w-12 h-9 rounded-lg bg-gray-100 dark:bg-white/5 flex items-center justify-center shrink-0"><i class="fa-solid fa-image text-gray-400 text-xs"></i></div>
                            <?php endif; ?>
                            <div class="min-w-0">
                                <p class="font-semibold text-gray-900 dark:text-white text-sm truncate max-w-[250px]"><?= e($blog['title']) ?></p>
                                <p class="text-[11px] text-gray-400 truncate max-w-[250px]">/blog/<?= e($blog['slug']) ?></p>
                            </div>
                        </div>
                    </td>
                    <td class="text-sm text-gray-600 dark:text-gray-400"><?= e($blog['category_name'] ?? '—') ?></td>
                    <td class="text-sm text-gray-600 dark:text-gray-400"><?= e($blog['author_name'] ?? '—') ?></td>
                    <td>
                        <?= statusBadge($blog['status'], 'blog') ?>
                        <?php if ($blog['featured']): ?>
                        <span class="inline-flex items-center px-2 py-0.5 rounded-md bg-gold-100 dark:bg-gold-500/10 text-gold-700 dark:text-gold-400 text-[10px] font-bold ml-1">★</span>
                        <?php endif; ?>
                    </td>
                    <td class="text-sm text-gray-500 whitespace-nowrap"><?= formatDate($blog['published_at'] ?? $blog['created_at']) ?></td>
                    <td>
                        <div class="flex items-center justify-end gap-2">
                            <a href="blogs?action=edit&id=<?= $blog['id'] ?>" class="btn btn-secondary btn-icon" title="Edit"><i class="fa-solid fa-pen text-xs"></i></a>
                            <button onclick="confirmDelete('blogs?action=delete&id=<?= $blog['id'] ?>&_csrf_token=<?= CSRF::token() ?>', 'Blog Post')" class="btn btn-danger btn-icon" title="Delete"><i class="fa-solid fa-trash-can text-xs"></i></button>
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
    // Show/hide scheduled date field
    $('#blogStatus').on('change', function() {
        if ($(this).val() === 'scheduled') {
            $('#scheduledDateGroup').removeClass('hidden');
            $('#publishedAt').attr('required', true);
        } else {
            $('#scheduledDateGroup').addClass('hidden');
            $('#publishedAt').removeAttr('required');
        }
    });

    // Initialize CKEditor
    if (document.querySelector('#editor')) {
        ClassicEditor.create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'underline', 'strikethrough', '|',
                      'link', 'bulletedList', 'numberedList', 'blockQuote', '|',
                      'insertTable', 'mediaEmbed', 'codeBlock', '|',
                      'undo', 'redo'],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                ]
            }
        }).catch(err => console.error('CKEditor error:', err));
    }

    // Client-side validation
    $('#blogForm').on('submit', function(e) {
        if (!validateForm('blogForm', {
            title: ['required', 'max:255'],
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
