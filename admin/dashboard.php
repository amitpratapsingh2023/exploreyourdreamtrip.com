<?php
/**
 * Dashboard — Admin Panel Home
 */
require_once __DIR__ . '/bootstrap.php';
Auth::requireLogin();

$pageTitle = 'Dashboard';

// Gather statistics
$blogModel    = new BlogModel();
$categoryModel = new CategoryModel();
$tagModel     = new TagModel();
$authorModel  = new AuthorModel();
$leadModel    = new LeadModel();
$adminModel   = new AdminModel();

$blogStats = $blogModel->getStats();
$leadStats = $leadModel->getCountByStatus();
$recentLeads = $leadModel->getRecent(5);
$recentBlogs = $blogModel->getAllWithRelations();
$recentBlogs = array_slice($recentBlogs, 0, 5);

$stats = [
    ['label' => 'Total Posts', 'value' => $blogStats['total'], 'icon' => 'fa-newspaper', 'color' => 'gold', 'bg' => 'bg-gold-100 dark:bg-gold-500/10', 'text' => 'text-gold-600 dark:text-gold-400', 'glow' => 'bg-gold-400', 'link' => 'blogs'],
    ['label' => 'Published', 'value' => $blogStats['published'], 'icon' => 'fa-circle-check', 'color' => 'emerald', 'bg' => 'bg-emerald-100 dark:bg-emerald-500/10', 'text' => 'text-emerald-600 dark:text-emerald-400', 'glow' => 'bg-emerald-400', 'link' => 'blogs?status=published'],
    ['label' => 'Total Leads', 'value' => $leadStats['total'], 'icon' => 'fa-inbox', 'color' => 'blue', 'bg' => 'bg-blue-100 dark:bg-blue-500/10', 'text' => 'text-blue-600 dark:text-blue-400', 'glow' => 'bg-blue-400', 'link' => 'leads'],
    ['label' => 'New Leads', 'value' => $leadStats['new'], 'icon' => 'fa-bell', 'color' => 'purple', 'bg' => 'bg-purple-100 dark:bg-purple-500/10', 'text' => 'text-purple-600 dark:text-purple-400', 'glow' => 'bg-purple-400', 'link' => 'leads?status=new'],
    ['label' => 'Categories', 'value' => $categoryModel->count(), 'icon' => 'fa-folder-tree', 'color' => 'amber', 'bg' => 'bg-amber-100 dark:bg-amber-500/10', 'text' => 'text-amber-600 dark:text-amber-400', 'glow' => 'bg-amber-400', 'link' => 'categories'],
    ['label' => 'Authors', 'value' => $authorModel->count(), 'icon' => 'fa-pen-fancy', 'color' => 'teal', 'bg' => 'bg-teal-100 dark:bg-teal-500/10', 'text' => 'text-teal-600 dark:text-teal-400', 'glow' => 'bg-teal-400', 'link' => 'authors'],
];

include 'partials/header.php';
include 'partials/sidebar.php';
?>

<!-- Page Header -->
<div class="page-header">
    <div>
        <h1 class="font-heading text-gray-900 dark:text-white">Dashboard</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Welcome back, <span class="font-semibold text-gray-900 dark:text-white"><?= e(Auth::name()) ?></span></p>
    </div>
    <div class="flex items-center gap-3">
        <a href="blogs?action=create" class="btn btn-primary">
            <i class="fa-solid fa-plus text-xs"></i> New Post
        </a>
    </div>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-10">
    <?php foreach ($stats as $i => $s): ?>
    <a href="<?= $s['link'] ?>" class="admin-card stat-card p-6 animate-in" style="animation-delay: <?= $i * 0.06 ?>s">
        <div class="stat-glow <?= $s['glow'] ?>"></div>
        <div class="flex items-center justify-between mb-4">
            <div class="stat-icon <?= $s['bg'] ?> <?= $s['text'] ?>">
                <i class="fa-solid <?= $s['icon'] ?>"></i>
            </div>
            <i class="fa-solid fa-arrow-up-right text-xs text-gray-300 dark:text-gray-700"></i>
        </div>
        <p class="text-3xl font-extrabold text-gray-900 dark:text-white tracking-tight"><?= $s['value'] ?></p>
        <p class="text-xs font-semibold text-gray-500 dark:text-gray-400 mt-1 uppercase tracking-wider"><?= $s['label'] ?></p>
    </a>
    <?php endforeach; ?>
</div>

<!-- Content Grid: Recent Blogs + Recent Leads -->
<div class="grid grid-cols-1 xl:grid-cols-2 gap-8">

    <!-- Recent Blog Posts -->
    <div class="admin-card animate-in" style="animation-delay: 0.4s">
        <div class="flex items-center justify-between p-6 pb-0">
            <h3 class="font-heading text-lg font-bold text-gray-900 dark:text-white flex items-center gap-3">
                <span class="w-1.5 h-5 bg-gold-500 rounded-full"></span> Recent Posts
            </h3>
            <a href="blogs" class="text-xs font-bold text-gold-500 hover:text-gold-600 uppercase tracking-wider">View All</a>
        </div>
        <div class="p-6">
            <?php if (empty($recentBlogs)): ?>
            <div class="empty-state py-8">
                <div class="empty-icon bg-gray-100 dark:bg-white/5 text-gray-400">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">No blog posts yet</p>
                <a href="blogs?action=create" class="btn btn-primary btn-sm mt-4"><i class="fa-solid fa-plus text-xs"></i> Create First Post</a>
            </div>
            <?php else: ?>
            <div class="space-y-4">
                <?php foreach ($recentBlogs as $blog): ?>
                <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors group">
                    <?php if ($blog['image']): ?>
                    <img src="<?= e(adminMediaSrc($blog['image'])) ?>" alt="" class="w-12 h-12 rounded-xl object-cover shrink-0 border border-gray-100 dark:border-white/5">
                    <?php else: ?>
                    <div class="w-12 h-12 rounded-xl bg-gray-100 dark:bg-white/5 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-image text-gray-400 text-sm"></i>
                    </div>
                    <?php endif; ?>
                    <div class="flex-1 min-w-0">
                        <a href="blogs?action=edit&id=<?= $blog['id'] ?>" class="text-sm font-semibold text-gray-900 dark:text-white truncate block group-hover:text-gold-500 transition-colors">
                            <?= e($blog['title']) ?>
                        </a>
                        <p class="text-[11px] text-gray-400 mt-0.5">
                            <?= e($blog['category_name'] ?? 'Uncategorized') ?> · <?= timeAgo($blog['created_at']) ?>
                        </p>
                    </div>
                    <?= statusBadge($blog['status'], 'blog') ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Recent Leads -->
    <div class="admin-card animate-in" style="animation-delay: 0.5s">
        <div class="flex items-center justify-between p-6 pb-0">
            <h3 class="font-heading text-lg font-bold text-gray-900 dark:text-white flex items-center gap-3">
                <span class="w-1.5 h-5 bg-blue-500 rounded-full"></span> Recent Leads
            </h3>
            <a href="leads" class="text-xs font-bold text-gold-500 hover:text-gold-600 uppercase tracking-wider">View All</a>
        </div>
        <div class="p-6">
            <?php if (empty($recentLeads)): ?>
            <div class="empty-state py-8">
                <div class="empty-icon bg-gray-100 dark:bg-white/5 text-gray-400">
                    <i class="fa-solid fa-inbox"></i>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">No leads received yet</p>
            </div>
            <?php else: ?>
            <div class="space-y-4">
                <?php foreach ($recentLeads as $lead): ?>
                <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-white/[0.02] transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-500/10 dark:to-purple-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400 font-bold text-sm shrink-0">
                        <?= strtoupper(mb_substr($lead['name'], 0, 1)) ?>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-gray-900 dark:text-white truncate"><?= e($lead['name']) ?></p>
                        <p class="text-[11px] text-gray-400 truncate"><?= e($lead['email']) ?> · <?= timeAgo($lead['created_at']) ?></p>
                    </div>
                    <?= statusBadge($lead['status'], 'lead') ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

</div>

<!-- Quick Actions -->
<div class="mt-10 admin-card p-6 animate-in" style="animation-delay: 0.6s">
    <h3 class="font-heading text-lg font-bold text-gray-900 dark:text-white mb-6 flex items-center gap-3">
        <span class="w-1.5 h-5 bg-emerald-500 rounded-full"></span> Quick Actions
    </h3>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
        <?php
        $actions = [
            ['New Post', 'fa-plus', 'blogs?action=create', 'bg-gold-50 dark:bg-gold-500/5 text-gold-600 dark:text-gold-400 hover:bg-gold-100'],
            ['New Category', 'fa-folder-plus', 'categories?action=create', 'bg-emerald-50 dark:bg-emerald-500/5 text-emerald-600 dark:text-emerald-400 hover:bg-emerald-100'],
            ['New Tag', 'fa-tag', 'tags?action=create', 'bg-blue-50 dark:bg-blue-500/5 text-blue-600 dark:text-blue-400 hover:bg-blue-100'],
            ['New Author', 'fa-user-plus', 'authors?action=create', 'bg-purple-50 dark:bg-purple-500/5 text-purple-600 dark:text-purple-400 hover:bg-purple-100'],
            ['View Leads', 'fa-inbox', 'leads', 'bg-amber-50 dark:bg-amber-500/5 text-amber-600 dark:text-amber-400 hover:bg-amber-100'],
            ['Visit Site', 'fa-globe', SITE_URL . '/', 'bg-teal-50 dark:bg-teal-500/5 text-teal-600 dark:text-teal-400 hover:bg-teal-100'],
        ];
        foreach ($actions as $a):
        ?>
        <a href="<?= $a[2] ?>" <?= $a[0] === 'Visit Site' ? 'target="_blank"' : '' ?> class="flex flex-col items-center gap-3 p-5 rounded-2xl <?= $a[3] ?> transition-all hover:-translate-y-1 group">
            <i class="fa-solid <?= $a[1] ?> text-xl group-hover:scale-110 transition-transform"></i>
            <span class="text-xs font-bold tracking-wide"><?= $a[0] ?></span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
