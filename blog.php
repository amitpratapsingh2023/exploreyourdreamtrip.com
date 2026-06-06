<?php
$page_title = "Travel Blog – Luxury Guides & Road Trip Tips";
$page_desc = "Discover expert travel advice, itineraries, and stories for India's finest destinations. Read guides on Agra, Rajasthan, luxury Tempo Travellers, and premium car hire.";
require_once 'includes/config.php';

// Safe wrapper for helpers if they aren't loaded
if (!function_exists('e')) {
    function e(?string $value): string {
        return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('formatDate')) {
    function formatDate(?string $date, string $format = 'd M Y'): string {
        if (!$date) return '—';
        return date($format, strtotime($date));
    }
}

// Custom breadcrumb for this page
$breadcrumb_custom = [
    ['title' => 'Blog', 'url' => '', 'active' => true],
];

// Require database & models
require_once __DIR__ . '/admin/core/Database.php';
require_once __DIR__ . '/admin/core/Model.php';
require_once __DIR__ . '/admin/models/BlogModel.php';
require_once __DIR__ . '/admin/models/CategoryModel.php';

$blogModel = new BlogModel();
$categoryModel = new CategoryModel();

// Get parameters
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$categorySlug = isset($_GET['category']) ? trim($_GET['category']) : '';

$categoryId = null;
$activeCategory = null;
if ($categorySlug !== '') {
    $activeCategory = $categoryModel->findBySlug($categorySlug);
    if ($activeCategory) {
        $categoryId = $activeCategory['id'];
    }
}

// Pagination setup
$limit = 6;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $limit;

// Fetch blogs and total counts
$blogs = $blogModel->getPublishedFiltered($limit, $offset, $search, $categoryId);
$totalBlogs = $blogModel->countPublishedFiltered($search, $categoryId);
$totalPages = (int)ceil($totalBlogs / $limit);

// Fetch all active categories with published posts for the filter bar
$categories = $categoryModel->getActiveWithPublishedPosts();

require_once 'includes/header.php';
?>

<!-- Structured Data (JSON-LD) - Breadcrumbs for Blog List -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "<?php echo BASE_URL; ?>"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Blog",
      "item": "<?php echo BASE_URL; ?>blog"
    }
  ]
}
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 1: HERO BANNER
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="relative min-h-[45vh] md:min-h-[50vh] flex items-end bg-obsidian-950 overflow-hidden pt-36 pb-16 md:pb-20">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo BASE_URL; ?>assets/images/blog/travel-comfort.webp" alt="Travel Blog Banner"
            class="w-full h-full object-cover object-center opacity-20 scale-105 transition-transform duration-1000">
        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/70 to-obsidian-950/20"></div>
        <div class="absolute inset-0 luxury-vignette opacity-70"></div>
    </div>

    <!-- Animated Glows -->
    <div class="absolute top-1/4 right-1/4 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] animate-pulse pointer-events-none"></div>
    <div class="absolute bottom-1/3 left-1/3 w-[300px] h-[300px] bg-brand-dark/5 rounded-full blur-[100px] animate-pulse pointer-events-none" style="animation-delay: 1.5s;"></div>

    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full space-y-7 text-center">
        <!-- Breadcrumbs -->
        <div class="flex justify-center">
            <?php require 'includes/breadcrumb.php'; ?>
        </div>

        <!-- Subtitle Badge -->
        <span class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-brand/10 border border-brand/25 text-brand text-[11px] font-extrabold uppercase tracking-[0.18em] shadow-[0_2px_20px_rgba(240,210,90,0.15)]">
            <i class="fa-solid fa-feather text-[9px]"></i>
            <span>Travel Chronicles</span>
        </span>

        <!-- Page Title -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight font-display tracking-tight max-w-4xl mx-auto">
            Inspiring Journeys & <br class="hidden sm:inline">
            <span class="text-gradient-gold">Luxury Travel Guides</span>
        </h1>

        <p class="text-slate-300 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-medium">
            Explore India with professional tips, destination roadmaps, and detailed fleet logs curated by travel experts.
        </p>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 2: FILTER & SEARCH BAR
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-8 bg-white border-b border-slate-200/80 sticky top-[72px] md:top-[108px] z-30 shadow-sm">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
            
            <!-- Category Pills -->
            <div class="flex flex-wrap items-center gap-2.5 w-full lg:w-auto">
                <a href="<?php echo BASE_URL; ?>blog<?php echo $search ? '?search=' . urlencode($search) : ''; ?>"
                   class="px-5 py-2.5 rounded-full text-xs font-bold tracking-wider uppercase transition-all duration-300 border <?php echo $categorySlug === '' ? 'bg-gradient-gold text-obsidian-950 border-brand shadow-sm' : 'bg-slate-50 border-slate-200/60 text-slate-600 hover:bg-slate-100 hover:border-slate-300' ?>">
                    All Articles
                </a>
                <?php foreach ($categories as $cat): 
                    $catUrl = BASE_URL . 'blog?category=' . e($cat['slug']) . ($search ? '&search=' . urlencode($search) : '');
                ?>
                    <a href="<?php echo $catUrl; ?>"
                       class="px-5 py-2.5 rounded-full text-xs font-bold tracking-wider uppercase transition-all duration-300 border <?php echo $categorySlug === $cat['slug'] ? 'bg-gradient-gold text-obsidian-950 border-brand shadow-sm' : 'bg-slate-50 border-slate-200/60 text-slate-600 hover:bg-slate-100 hover:border-slate-300' ?>">
                        <?php echo e($cat['name']); ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Search Form -->
            <form method="GET" action="<?php echo BASE_URL; ?>blog" class="relative w-full lg:w-96">
                <?php if ($categorySlug): ?>
                    <input type="hidden" name="category" value="<?php echo e($categorySlug); ?>">
                <?php endif; ?>
                <div class="relative flex items-center">
                    <input type="text" name="search" placeholder="Search guides, routes, tips..." value="<?php echo e($search); ?>"
                           class="w-full px-5 py-3.5 pl-12 rounded-full border border-slate-200 focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand font-medium text-sm text-obsidian-950 shadow-inner transition-all duration-300">
                    <span class="absolute left-5 text-slate-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <?php if ($search): ?>
                        <a href="<?php echo BASE_URL; ?>blog<?php echo $categorySlug ? '?category=' . e($categorySlug) : ''; ?>" class="absolute right-5 text-slate-400 hover:text-slate-600 transition-colors">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </form>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 3: ARTICLES CONTAINER
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-16 bg-slate-50/50 relative min-h-[50vh]">
    <div class="max-w-[1440px] mx-auto px-4">
        
        <?php if (empty($blogs)): ?>
            <!-- Empty State -->
            <div class="max-w-md mx-auto text-center py-20 space-y-6">
                <div class="w-20 h-20 bg-brand/10 border border-brand/20 flex items-center justify-center text-brand text-3xl rounded-3xl mx-auto shadow-sm">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div class="space-y-2">
                    <h3 class="text-2xl font-bold font-display text-obsidian-950">No Articles Found</h3>
                    <p class="text-slate-500 text-sm font-medium">We couldn't find any articles matching your filters or search keywords. Please adjust your criteria.</p>
                </div>
                <a href="<?php echo BASE_URL; ?>blog" class="inline-flex items-center justify-center bg-gradient-gold text-obsidian-950 px-6 py-3 rounded-full text-xs uppercase tracking-widest font-extrabold shadow-md hover:shadow-lg transition-all duration-300">
                    Clear Filters
                </a>
            </div>
        <?php else: ?>
            
            <!-- FEATURED POST: Display only on Page 1 when no search/filters are active -->
            <?php 
            $gridStart = 0;
            if ($page === 1 && $search === '' && $categorySlug === ''):
                $featured = null;
                // Look for featured blog
                foreach ($blogs as $b) {
                    if ($b['featured'] == 1) {
                        $featured = $b;
                        break;
                    }
                }
                // Fallback to first if none marked featured
                if (!$featured) {
                    $featured = $blogs[0];
                }
                
                if ($featured):
                    $featuredUrl = BASE_URL . 'blog/' . e($featured['slug']);
            ?>
                <!-- Featured Article Card -->
                <div class="group bg-white rounded-[36px] border border-slate-100 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden mb-16 grid grid-cols-1 lg:grid-cols-12 gap-0">
                    <!-- Image Area -->
                    <div class="lg:col-span-7 aspect-[16/10] lg:aspect-auto min-h-[300px] lg:min-h-[400px] overflow-hidden relative">
                        <img src="<?php echo e($featured['image'] ?: BASE_URL . 'assets/images/blog/blog-placeholder.svg'); ?>" 
                             alt="<?php echo e($featured['image_alt'] ?: $featured['title']); ?>" 
                             title="<?php echo e($featured['image_title'] ?: $featured['title']); ?>"
                             class="w-full h-full object-cover group-hover:scale-[1.02] transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                        
                        <!-- Floating Category -->
                        <span class="absolute top-6 left-6 px-4 py-1.5 rounded-full bg-obsidian-950/80 backdrop-blur-md text-brand font-bold text-[10px] uppercase tracking-wider border border-white/10">
                            <?php echo e($featured['category_name'] ?: 'Travel'); ?>
                        </span>
                    </div>

                    <!-- Text Area -->
                    <div class="lg:col-span-5 p-8 md:p-12 flex flex-col justify-between space-y-8">
                        <div class="space-y-5">
                            <div class="flex items-center space-x-3 text-xs text-slate-400 font-semibold uppercase tracking-wider">
                                <span>Featured Article</span>
                                <span>•</span>
                                <span><?php echo formatDate($featured['published_at'] ?: $featured['created_at']); ?></span>
                            </div>
                            
                            <h2 class="text-2xl md:text-3xl font-extrabold text-obsidian-950 font-display leading-tight group-hover:text-brand transition-colors duration-300">
                                <a href="<?php echo $featuredUrl; ?>"><?php echo e($featured['title']); ?></a>
                            </h2>
                            
                            <p class="text-slate-600 text-sm md:text-base leading-relaxed font-light">
                                <?php echo e($featured['short_description']); ?>
                            </p>
                        </div>

                        <div class="flex items-center justify-between border-t border-slate-100 pt-6">
                            <!-- Author Profile -->
                            <div class="flex items-center space-x-3">
                                <img src="<?php echo e($featured['author_avatar'] ?: BASE_URL . 'assets/images/authors/amit.webp'); ?>" 
                                     alt="<?php echo e($featured['author_name']); ?>"
                                     class="w-10 h-10 rounded-full object-cover border border-slate-100 shadow-sm">
                                <div>
                                    <p class="text-sm font-bold text-obsidian-950"><?php echo e($featured['author_name']); ?></p>
                                    <p class="text-[10px] text-slate-400 font-medium"><?php echo e($featured['author_designation']); ?></p>
                                </div>
                            </div>

                            <a href="<?php echo $featuredUrl; ?>" class="inline-flex items-center text-xs font-bold uppercase text-brand-dark hover:text-brand transition-colors group/btn">
                                <span>Read Article</span>
                                <i class="fa-solid fa-arrow-right ml-2 transition-transform group-hover/btn:translate-x-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php 
                endif;
            endif; 
            ?>

            <!-- REGULAR ARTICLES GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                <?php 
                foreach ($blogs as $index => $blog):
                    // If we displayed the featured post above, skip rendering it in the general list
                    if ($page === 1 && $search === '' && $categorySlug === '') {
                        if (($featured && $blog['id'] === $featured['id'])) {
                            continue;
                        }
                    }
                    $blogUrl = BASE_URL . 'blog/' . e($blog['slug']);
                ?>
                    <article class="group bg-white rounded-[32px] border border-slate-200/50 hover:border-brand/35 shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden flex flex-col justify-between">
                        <div>
                            <!-- Featured Image -->
                            <div class="aspect-[16/10] overflow-hidden relative bg-slate-100">
                                <img src="<?php echo e($blog['image'] ?: BASE_URL . 'assets/images/blog/blog-placeholder.svg'); ?>" 
                                     alt="<?php echo e($blog['image_alt'] ?: $blog['title']); ?>" 
                                     title="<?php echo e($blog['image_title'] ?: $blog['title']); ?>" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/25 to-transparent"></div>
                                
                                <!-- Floating category -->
                                <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-obsidian-950/80 backdrop-blur-md text-brand font-bold text-[9px] uppercase tracking-wider border border-white/5">
                                    <?php echo e($blog['category_name'] ?: 'Travel'); ?>
                                </span>
                            </div>

                            <!-- Post Details -->
                            <div class="p-6 md:p-8 space-y-4">
                                <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider">
                                    <?php echo formatDate($blog['published_at'] ?: $blog['created_at']); ?>
                                </span>
                                
                                <h3 class="text-lg md:text-xl font-bold text-obsidian-950 font-display leading-tight group-hover:text-brand transition-colors duration-300">
                                    <a href="<?php echo $blogUrl; ?>"><?php echo e($blog['title']); ?></a>
                                </h3>
                                
                                <p class="text-slate-600 text-sm leading-relaxed font-light line-clamp-3">
                                    <?php echo e($blog['short_description']); ?>
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="px-6 md:px-8 pb-6 pt-4 border-t border-slate-100/80 flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="<?php echo e($blog['author_avatar'] ?: BASE_URL . 'assets/images/authors/amit.webp'); ?>" 
                                     alt="<?php echo e($blog['author_name']); ?>"
                                     class="w-8 h-8 rounded-full object-cover shadow-sm">
                                <span class="text-xs font-semibold text-slate-700"><?php echo e($blog['author_name']); ?></span>
                            </div>

                            <a href="<?php echo $blogUrl; ?>" class="inline-flex items-center text-[11px] font-extrabold uppercase text-brand-dark hover:text-brand transition-colors group/btn">
                                <span>Read</span>
                                <i class="fa-solid fa-arrow-right ml-1.5 transition-transform group-hover/btn:translate-x-1"></i>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- PAGINATION CONTROLS -->
            <?php if ($totalPages > 1): ?>
                <div class="mt-16 flex justify-center items-center gap-3">
                    <!-- Prev -->
                    <?php if ($page > 1): 
                        $prevUrl = BASE_URL . 'blog?page=' . ($page - 1) . ($categorySlug ? '&category=' . e($categorySlug) : '') . ($search ? '&search=' . urlencode($search) : '');
                    ?>
                        <a href="<?php echo $prevUrl; ?>" class="w-11 h-11 rounded-full bg-white border border-slate-200 text-slate-500 hover:border-brand hover:text-brand flex items-center justify-center transition-all duration-300">
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </a>
                    <?php endif; ?>

                    <!-- Pages -->
                    <?php 
                    for ($i = 1; $i <= $totalPages; $i++): 
                        $active = $i === $page;
                        $pageUrl = BASE_URL . 'blog?page=' . $i . ($categorySlug ? '&category=' . e($categorySlug) : '') . ($search ? '&search=' . urlencode($search) : '');
                    ?>
                        <a href="<?php echo $pageUrl; ?>" 
                           class="w-11 h-11 rounded-full flex items-center justify-center text-xs font-bold transition-all duration-300 <?php echo $active ? 'bg-gradient-gold text-obsidian-950 shadow-md border-brand' : 'bg-white border border-slate-200 text-slate-600 hover:border-brand hover:text-brand' ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>

                    <!-- Next -->
                    <?php if ($page < $totalPages): 
                        $nextUrl = BASE_URL . 'blog?page=' . ($page + 1) . ($categorySlug ? '&category=' . e($categorySlug) : '') . ($search ? '&search=' . urlencode($search) : '');
                    ?>
                        <a href="<?php echo $nextUrl; ?>" class="w-11 h-11 rounded-full bg-white border border-slate-200 text-slate-500 hover:border-brand hover:text-brand flex items-center justify-center transition-all duration-300">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        <?php endif; ?>

    </div>
</section>

<!-- Call to Action Banner -->
<?php require_once 'includes/cta.php'; ?>

<?php
require_once 'includes/footer.php';
?>
