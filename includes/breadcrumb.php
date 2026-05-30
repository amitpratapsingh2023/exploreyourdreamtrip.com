<?php
/**
 * Premium Luxury Common Breadcrumbs Component
 */
require_once __DIR__ . '/config.php';

$home_url = BASE_URL;
$breadcrumbs = [
    ['title' => 'Home', 'url' => $home_url, 'active' => false]
];

// Determine pages
if (isset($breadcrumb_custom) && is_array($breadcrumb_custom)) {
    $breadcrumbs = array_merge($breadcrumbs, $breadcrumb_custom);
} else {
    // Auto-detect based on current page name
    $current_page_name = basename($_SERVER['PHP_SELF']);
    if ($current_page_name === 'tours.php') {
        $breadcrumbs[] = ['title' => 'Tours & Packages', 'url' => '', 'active' => true];
    } elseif ($current_page_name === 'tempo-traveller.php') {
        $breadcrumbs[] = ['title' => 'Tempo Traveller Rental', 'url' => '', 'active' => true];
    } elseif ($current_page_name === 'car-rental.php') {
        $breadcrumbs[] = ['title' => 'Car Rental', 'url' => '', 'active' => true];
    } elseif ($current_page_name === 'about.php') {
        $breadcrumbs[] = ['title' => 'About Us', 'url' => '', 'active' => true];
    } elseif ($current_page_name === 'contact.php') {
        $breadcrumbs[] = ['title' => 'Contact Us', 'url' => '', 'active' => true];
    }
}
?>

<nav aria-label="Breadcrumb" class="inline-flex items-center justify-center py-2 px-4 rounded-full bg-white/5 border border-white/10 backdrop-blur-md shadow-lg">
    <ol itemScope itemType="https://schema.org/BreadcrumbList" class="flex items-center space-x-2.5 text-[10px] sm:text-xs font-semibold uppercase tracking-wider">
        <?php foreach ($breadcrumbs as $index => $crumb): ?>
            <?php if ($index > 0): ?>
                <li class="text-white/20 select-none" aria-hidden="true">
                    <i class="fa-solid fa-chevron-right text-[8px] sm:text-[9px]"></i>
                </li>
            <?php endif; ?>
            
            <li itemScope itemType="https://schema.org/ListItem">
                <?php if ($crumb['active'] || empty($crumb['url'])): ?>
                    <span itemProp="name" aria-current="page" class="text-brand font-bold"><?php echo htmlspecialchars($crumb['title']); ?></span>
                    <meta itemProp="position" content="<?php echo $index + 1; ?>">
                <?php else: ?>
                    <a itemProp="item" href="<?php echo $crumb['url']; ?>" class="text-slate-300 hover:text-brand transition-colors duration-300 flex items-center group">
                        <?php if ($crumb['title'] === 'Home'): ?>
                            <i class="fa-solid fa-house text-[9px] sm:text-[10px] mr-1.5 text-slate-400 group-hover:text-brand transition-colors"></i>
                        <?php endif; ?>
                        <span itemProp="name"><?php echo htmlspecialchars($crumb['title']); ?></span>
                    </a>
                    <meta itemProp="position" content="<?php echo $index + 1; ?>">
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</nav>
