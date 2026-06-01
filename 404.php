<?php
http_response_code(404);
$page_title = "Page Not Found – Explore Your Dream Trip";
$page_desc = "The requested page could not be found on Explore Your Dream Trip. Return to the home page or browse popular luxury tour packages.";
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- Robots meta override (added via JS to prevent indexing of 404 page) -->
<script>
    const meta = document.createElement('meta');
    meta.name = 'robots';
    meta.content = 'noindex, follow';
    document.getElementsByTagName('head')[0].appendChild(meta);
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     404 NOT FOUND CONTENT SECTION
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-36 md:py-48 bg-gradient-dark text-white flex-grow flex items-center justify-center relative z-10 overflow-hidden">
    <!-- Glow Details -->
    <div class="absolute top-1/4 left-1/3 w-[300px] h-[300px] bg-brand/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/3 w-[300px] h-[300px] bg-brand-dark/5 rounded-full blur-[100px] pointer-events-none" style="animation-delay: 2s;"></div>

    <div class="max-w-xl w-full mx-auto px-4 relative z-10 text-center space-y-8">
        
        <!-- Rotating Compass Graphic -->
        <div class="w-24 h-24 bg-brand/10 border border-brand/20 rounded-full flex items-center justify-center text-brand text-5xl mx-auto shadow-sm animate-spin" style="animation-duration: 25s;">
            <i class="fa-solid fa-compass"></i>
        </div>

        <!-- Headings -->
        <div class="space-y-2">
            <h1 class="text-6xl md:text-8xl font-black text-white leading-none font-display">404</h1>
            <h2 class="text-xl md:text-2xl font-bold text-gradient-gold uppercase tracking-wider font-display">Destination Not Found</h2>
        </div>

        <!-- Descriptive Text -->
        <p class="text-slate-300 text-sm md:text-base leading-relaxed font-medium max-w-sm mx-auto">
            The page you are looking for has either been moved, deleted, or is temporarily unavailable. Let us help you navigate back to the correct path.
        </p>

        <!-- Divider -->
        <div class="gold-fade-divider"></div>

        <!-- Call to Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="<?php echo BASE_URL; ?>" 
                class="w-full sm:w-auto relative group overflow-hidden px-6 py-3 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md inline-flex items-center justify-center transition-all duration-300 border border-white/10">
                <div class="absolute inset-0 bg-gradient-gold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></div>
                <span class="relative z-10 group-hover:text-obsidian-950 transition-colors duration-300">Back To Safety</span>
            </a>
            <a href="<?php echo BASE_URL; ?>tours" 
                class="w-full sm:w-auto relative group overflow-hidden px-6 py-3 bg-white/5 hover:bg-white/10 text-white/90 hover:text-white border border-white/10 hover:border-white/20 rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-sm inline-flex items-center justify-center transition-all duration-300">
                <span>View Tour Packages</span>
            </a>
            <a href="<?php echo BASE_URL; ?>contact" 
                class="w-full sm:w-auto relative group overflow-hidden px-6 py-3 bg-white/5 hover:bg-white/10 text-white/90 hover:text-white border border-white/10 hover:border-white/20 rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-sm inline-flex items-center justify-center transition-all duration-300">
                <span>Contact Desk</span>
            </a>
        </div>

    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
