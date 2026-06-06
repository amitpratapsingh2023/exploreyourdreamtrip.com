<?php
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

if (!function_exists('truncate')) {
    function truncate(string $text, int $length = 100, string $suffix = '...'): string {
        if (mb_strlen($text) <= $length) return $text;
        return mb_substr($text, 0, $length) . $suffix;
    }
}

// Require database & models
require_once __DIR__ . '/admin/core/Database.php';
require_once __DIR__ . '/admin/core/Model.php';
require_once __DIR__ . '/admin/models/BlogModel.php';
require_once __DIR__ . '/admin/models/CategoryModel.php';

$blogModel = new BlogModel();
$categoryModel = new CategoryModel();

// Get the slug
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$blog = $blogModel->getPublishedBySlug($slug);

// Redirect to 404 if post doesn't exist
if (!$blog) {
    http_response_code(404);
    require_once '404.php';
    exit;
}

// Set SEO Page Details
$page_title = $blog['meta_title'] ?: $blog['title'] . " – Travel Blog";
$page_desc = $blog['meta_description'] ?: $blog['short_description'];

// Calculate reading time
$wordCount = str_word_count(strip_tags($blog['description']));
$readTime = max(1, (int)ceil($wordCount / 200));

// Breadcrumb definition
$breadcrumb_custom = [
    ['title' => 'Blog', 'url' => BASE_URL . 'blog', 'active' => false],
    ['title' => truncate($blog['title'], 30), 'url' => '', 'active' => true],
];

// Fetch other data for sidebar
$categories = $categoryModel->getActiveWithPublishedPosts();
$recentBlogs = $blogModel->getPublished(5); // Get recent posts

// Dynamic JSON-LD Article Schema
$schemaJson = $blog['schema_json'] ?: json_encode([
    "@context" => "https://schema.org",
    "@type" => "BlogPosting",
    "headline" => $blog['title'],
    "image" => $blog['image'] ?: BASE_URL . 'assets/images/blog/blog-placeholder.svg',
    "genre" => $blog['category_name'] ?: 'Travel',
    "keywords" => $blog['meta_keywords'] ?: 'luxury travel, india tours',
    "publisher" => [
        "@type" => "Organization",
        "name" => SITE_NAME,
        "logo" => BASE_URL . 'assets/images/brand/header-logo.png'
    ],
    "url" => BASE_URL . 'blog/' . $blog['slug'],
    "datePublished" => $blog['published_at'] ?: $blog['created_at'],
    "dateModified" => $blog['updated_at'],
    "description" => $blog['meta_description'] ?: $blog['short_description'],
    "author" => [
        "@type" => "Person",
        "name" => $blog['author_name']
    ]
]);

require_once 'includes/header.php';
?>

<!-- Inject JSON-LD Schema -->
<script type="application/ld+json">
<?php echo $schemaJson; ?>
</script>

<!-- Breadcrumb Schema -->
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
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "<?php echo e($blog['title']); ?>",
      "item": "<?php echo BASE_URL . 'blog/' . e($blog['slug']); ?>"
    }
  ]
}
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 1: HERO HEADER OVERLAY
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="relative min-h-[50vh] md:min-h-[55vh] flex items-end bg-obsidian-950 overflow-hidden pt-36 pb-16 md:pb-20">
    <!-- Immersive Background image -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo e($blog['image'] ?: BASE_URL . 'assets/images/blog/blog-placeholder.svg'); ?>" 
             alt="<?php echo e($blog['image_alt'] ?: $blog['title']); ?>" 
             title="<?php echo e($blog['image_title'] ?: $blog['title']); ?>"
             class="w-full h-full object-cover object-center opacity-25 scale-105 transition-transform duration-1000">
        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/70 to-obsidian-950/20"></div>
        <div class="absolute inset-0 luxury-vignette opacity-80"></div>
    </div>

    <!-- Accent glows -->
    <div class="absolute top-1/4 right-1/4 w-[450px] h-[450px] bg-brand/5 rounded-full blur-[140px] pointer-events-none"></div>

    <!-- Content Container -->
    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full space-y-6 text-center">
        <!-- Breadcrumbs -->
        <div class="flex justify-center">
            <?php require 'includes/breadcrumb.php'; ?>
        </div>

        <!-- Category Badge -->
        <a href="<?php echo BASE_URL; ?>blog?category=<?php echo e($blog['category_slug']); ?>" 
           class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-brand/10 border border-brand/25 text-brand text-[10px] font-extrabold uppercase tracking-[0.18em] hover:bg-brand/20 transition-all duration-300">
            <i class="fa-solid fa-folder-open text-[9px]"></i>
            <span><?php echo e($blog['category_name'] ?: 'Travel'); ?></span>
        </a>

        <!-- Main Title -->
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-white leading-tight font-display tracking-tight max-w-4xl mx-auto">
            <?php echo e($blog['title']); ?>
        </h1>

        <!-- Short Description -->
        <p class="text-slate-300 text-sm md:text-base max-w-3xl mx-auto leading-relaxed font-light font-display">
            <?php echo e($blog['short_description']); ?>
        </p>

        <!-- Metadata Bar -->
        <div class="flex flex-wrap items-center justify-center gap-6 pt-4 border-t border-white/10 max-w-lg mx-auto text-xs text-slate-400 font-semibold uppercase tracking-wider">
            <div class="flex items-center space-x-2">
                <i class="fa-regular fa-calendar-days text-brand"></i>
                <span><?php echo formatDate($blog['published_at'] ?: $blog['created_at']); ?></span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fa-regular fa-clock text-brand"></i>
                <span><?php echo $readTime; ?> Min Read</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fa-regular fa-user text-brand"></i>
                <span>By <?php echo e($blog['author_name']); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 2: ARTICLE BODY & SIDEBAR
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-16 bg-white relative z-10">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Left Column: Article Body -->
            <div class="lg:col-span-8 space-y-12">
                <!-- Featured Image -->
                <?php if ($blog['image']): ?>
                    <div class="relative overflow-hidden rounded-[36px] border border-slate-100 shadow-md aspect-[16/10]">
                        <img src="<?php echo e($blog['image']); ?>" 
                             alt="<?php echo e($blog['image_alt'] ?: $blog['title']); ?>" 
                             title="<?php echo e($blog['image_title'] ?: $blog['title']); ?>"
                             class="w-full h-full object-cover">
                    </div>
                <?php endif; ?>

                <!-- Rich Text Description -->
                <div class="luxury-article-content text-slate-700 text-sm md:text-base leading-relaxed font-medium space-y-6">
                    <?php echo $blog['description']; ?>
                </div>

                <!-- Sharing and Meta Tags Section -->
                <div class="pt-8 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <!-- Share tools -->
                    <div class="flex items-center space-x-4">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Share Article:</span>
                        <div class="flex items-center space-x-2">
                            <?php 
                                $shareUrl = urlencode((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                                $shareTitle = urlencode($blog['title']);
                            ?>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareUrl; ?>" target="_blank"
                               class="w-9 h-9 rounded-full bg-slate-50 border border-slate-200 text-slate-500 hover:bg-brand/10 hover:text-brand-dark hover:border-brand/30 transition-all flex items-center justify-center text-sm">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo $shareUrl; ?>&text=<?php echo $shareTitle; ?>" target="_blank"
                               class="w-9 h-9 rounded-full bg-slate-50 border border-slate-200 text-slate-500 hover:bg-brand/10 hover:text-brand-dark hover:border-brand/30 transition-all flex items-center justify-center text-sm">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send?text=<?php echo $shareTitle . '%20' . $shareUrl; ?>" target="_blank"
                               class="w-9 h-9 rounded-full bg-slate-50 border border-slate-200 text-slate-500 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-all flex items-center justify-center text-sm">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $shareUrl; ?>&title=<?php echo $shareTitle; ?>" target="_blank"
                               class="w-9 h-9 rounded-full bg-slate-50 border border-slate-200 text-slate-500 hover:bg-brand/10 hover:text-brand-dark hover:border-brand/30 transition-all flex items-center justify-center text-sm">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Author Details Profile Box -->
                <div class="p-8 bg-slate-50 rounded-[32px] border border-slate-200/60 flex flex-col md:flex-row items-center md:items-start gap-6">
                    <img src="<?php echo e($blog['author_avatar'] ?: BASE_URL . 'assets/images/authors/amit.webp'); ?>" 
                         alt="<?php echo e($blog['author_name']); ?>"
                         class="w-20 h-20 rounded-2xl object-cover border border-white shadow-md flex-shrink-0">
                    <div class="space-y-3 text-center md:text-left">
                        <div class="space-y-0.5">
                            <h4 class="text-lg font-bold text-obsidian-950 font-display"><?php echo e($blog['author_name']); ?></h4>
                            <p class="text-xs text-brand-accent font-extrabold uppercase tracking-wider"><?php echo e($blog['author_designation']); ?></p>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed font-light">
                            <?php echo e($blog['author_bio'] ?: 'A premium travel planner committed to creating unforgettable private tour itineraries and road journeys across India.'); ?>
                        </p>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-10">
                
                <!-- Search Widget -->
                <div class="p-6 bg-slate-50 rounded-[28px] border border-slate-200/50 space-y-4">
                    <h4 class="text-sm font-bold text-obsidian-950 uppercase tracking-widest relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-[2px] after:bg-brand">
                        Search Blog
                    </h4>
                    <form method="GET" action="<?php echo BASE_URL; ?>blog">
                        <div class="relative flex items-center">
                            <input type="text" name="search" placeholder="Type keywords..." 
                                   class="w-full px-4 py-3 rounded-full border border-slate-200 focus:outline-none focus:border-brand font-medium text-xs text-obsidian-950">
                            <button type="submit" class="absolute right-4 text-slate-400 hover:text-brand transition-colors">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Categories Widget -->
                <div class="p-6 bg-slate-50 rounded-[28px] border border-slate-200/50 space-y-4">
                    <h4 class="text-sm font-bold text-obsidian-950 uppercase tracking-widest relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-[2px] after:bg-brand">
                        Categories
                    </h4>
                    <ul class="space-y-3 font-medium text-sm">
                        <?php foreach ($categories as $cat): ?>
                            <li>
                                <a href="<?php echo BASE_URL; ?>blog?category=<?php echo e($cat['slug']); ?>" 
                                   class="flex items-center justify-between text-slate-600 hover:text-brand transition-colors group">
                                    <span class="group-hover:translate-x-1 transition-transform duration-300">
                                        <i class="fa-solid fa-chevron-right text-[9px] text-brand/50 mr-2"></i><?php echo e($cat['name']); ?>
                                    </span>
                                    <span class="bg-white px-2.5 py-0.5 rounded-full border border-slate-200/60 text-[10px] text-slate-400 group-hover:bg-brand/10 group-hover:text-brand-dark group-hover:border-transparent transition-all"><?php echo $cat['published_blog_count']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Recent Posts Widget -->
                <div class="p-6 bg-slate-50 rounded-[28px] border border-slate-200/50 space-y-5">
                    <h4 class="text-sm font-bold text-obsidian-950 uppercase tracking-widest relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-8 after:h-[2px] after:bg-brand">
                        Recent Articles
                    </h4>
                    <div class="space-y-4">
                        <?php 
                        $counter = 0;
                        foreach ($recentBlogs as $rb): 
                            // Skip the current blog post
                            if ($rb['id'] === $blog['id']) {
                                continue;
                            }
                            $counter++;
                            if ($counter > 3) break; // Limit sidebar to 3 other recent posts
                            $rbUrl = BASE_URL . 'blog/' . e($rb['slug']);
                        ?>
                            <div class="flex items-center gap-3.5 group">
                                <a href="<?php echo $rbUrl; ?>" class="w-16 h-12 rounded-xl overflow-hidden flex-shrink-0 bg-slate-200 border border-slate-100 shadow-sm relative">
                                    <img src="<?php echo e($rb['image'] ?: BASE_URL . 'assets/images/blog/blog-placeholder.svg'); ?>" 
                                         alt="<?php echo e($rb['title']); ?>"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </a>
                                <div class="min-w-0 space-y-1">
                                    <span class="text-[9px] text-slate-400 font-bold uppercase tracking-wider">
                                        <?php echo formatDate($rb['published_at'] ?: $rb['created_at']); ?>
                                    </span>
                                    <h5 class="text-xs font-bold text-obsidian-950 leading-snug group-hover:text-brand transition-colors line-clamp-2">
                                        <a href="<?php echo $rbUrl; ?>"><?php echo e($rb['title']); ?></a>
                                    </h5>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Luxury Inquiry Sidebar CTA Card -->
                <div class="p-8 bg-obsidian-950 rounded-[32px] border border-white/5 relative overflow-hidden text-center text-white shadow-xl">
                    <!-- Glow -->
                    <div class="absolute -bottom-12 -right-12 w-32 h-32 bg-brand/10 rounded-full blur-2xl"></div>
                    <div class="absolute -top-12 -left-12 w-32 h-32 bg-brand-dark/5 rounded-full blur-2xl"></div>
                    
                    <div class="relative z-10 space-y-6">
                        <span class="w-12 h-12 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand text-xl mx-auto">
                            <i class="fa-solid fa-compass"></i>
                        </span>
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold font-display text-white">Bespoke Journeysings</h4>
                            <p class="text-xs text-slate-400 leading-relaxed font-light">
                                Let our destination experts plan a customized itinerary featuring premium transits and vetted 5-star hotels.
                            </p>
                        </div>
                        <a href="<?php echo BASE_URL; ?>#inquiry" 
                           class="w-full inline-flex items-center justify-center py-3 bg-gradient-gold text-obsidian-950 rounded-full text-[10px] font-extrabold uppercase tracking-widest transition-all duration-300 hover:shadow-[0_0_20px_rgba(240,210,90,0.3)] hover:-translate-y-0.5">
                            <span>Plan My Journey</span>
                            <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </aside>

        </div>
    </div>
</section>

<!-- Include CTA Inquiry Form at base -->
<?php require_once 'includes/cta.php'; ?>

<?php
require_once 'includes/footer.php';
?>
