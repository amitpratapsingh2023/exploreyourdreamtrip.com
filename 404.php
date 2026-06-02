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
<section class="py-24 md:py-32 bg-gradient-dark text-white flex-grow relative z-10 overflow-hidden">
    <!-- Glow Details -->
    <div class="absolute top-1/4 left-1/3 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/3 w-[400px] h-[400px] bg-brand-dark/5 rounded-full blur-[120px] pointer-events-none" style="animation-delay: 2s;"></div>

    <div class="max-w-[1440px] mx-auto px-4 flex flex-col items-center">
        
        <!-- Glass Luxury Panel for Error Message -->
        <div class="max-w-2xl w-full bg-slate-900/40 backdrop-blur-xl rounded-[40px] border border-white/5 border-luxury-gold p-8 md:p-12 shadow-2xl text-center space-y-8 hover:shadow-[0_20px_50px_rgba(240,210,90,0.08)] transition-all duration-500 mb-16">
            
            <!-- Rotating Compass Graphic -->
            <div class="w-20 h-20 bg-brand/10 border border-brand/20 rounded-full flex items-center justify-center text-brand text-4xl mx-auto shadow-sm animate-spin hover:scale-115 transition-transform duration-500 cursor-pointer" style="animation-duration: 35s;">
                <i class="fa-solid fa-compass"></i>
            </div>

            <!-- Headings -->
            <div class="space-y-2">
                <h1 class="text-7xl md:text-8xl font-black text-white leading-none font-display tracking-tighter">404</h1>
                <h2 class="text-lg md:text-xl font-extrabold text-gradient-gold uppercase tracking-widest font-display">Destination Not Found</h2>
            </div>

            <!-- Descriptive Text -->
            <p class="text-slate-300 text-xs md:text-sm leading-relaxed font-medium max-w-sm mx-auto">
                The destination you are looking for does not exist or has moved. Let us help you find the right coordinates.
            </p>

            <!-- Search Form / Destination Finder -->
            <form id="dest-search-form" class="max-w-md mx-auto relative z-20">
                <div class="flex flex-col sm:flex-row gap-3 items-center bg-slate-950/60 p-2 rounded-2xl border border-white/10 focus-within:border-brand/40 transition-colors">
                    <div class="relative w-full">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-brand pointer-events-none">
                            <i class="fa-solid fa-location-dot"></i>
                        </span>
                        <select id="dest-select" class="w-full bg-transparent text-white pl-10 pr-8 py-2.5 focus:outline-none appearance-none text-xs font-bold uppercase tracking-wider cursor-pointer">
                            <option value="" class="bg-slate-950 text-slate-400">Where would you like to go?</option>
                            <?php foreach ($TOURS as $key => $tour): ?>
                                <option value="<?php echo BASE_URL . $tour['link']; ?>" class="bg-slate-950 text-white"><?php echo $tour['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="absolute inset-y-0 right-0 pr-4 flex items-center text-brand pointer-events-none">
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </span>
                    </div>
                    <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-gradient-gold text-obsidian-950 font-extrabold text-[11px] uppercase tracking-widest rounded-xl hover:shadow-lg transition-all duration-300 btn-shimmer shrink-0">
                        Find Package
                    </button>
                </div>
            </form>

            <script>
                document.getElementById('dest-search-form').addEventListener('submit', function(e) {
                    e.preventDefault();
                    const select = document.getElementById('dest-select');
                    const val = select.value;
                    if (val) {
                        window.location.href = val;
                    } else {
                        window.location.href = "<?php echo BASE_URL; ?>tours";
                    }
                });
            </script>

            <!-- Divider -->
            <div class="gold-fade-divider"></div>

            <!-- Call to Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?php echo BASE_URL; ?>" 
                    class="w-full sm:w-auto relative group overflow-hidden px-6 py-3.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md inline-flex items-center justify-center transition-all duration-300 border border-white/10 hover:border-brand/40">
                    <div class="absolute inset-0 bg-gradient-gold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></div>
                    <span class="relative z-10 group-hover:text-obsidian-950 transition-colors duration-300">Back To Home</span>
                </a>
                <a href="<?php echo BASE_URL; ?>contact" 
                    class="w-full sm:w-auto relative group overflow-hidden px-6 py-3.5 bg-white/5 hover:bg-white/10 text-white/90 hover:text-white border border-white/10 hover:border-white/20 rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-sm inline-flex items-center justify-center transition-all duration-300">
                    <span>Contact Support</span>
                </a>
            </div>

        </div>

        <!-- Dynamic Recommended Tour Cards (Matching Dark Theme) -->
        <div class="w-full max-w-[1440px] mt-12">
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-3">
                <span class="text-brand font-bold text-xs uppercase tracking-[0.25em]">Bespoke Escapes</span>
                <h3 class="text-3xl font-extrabold text-white leading-tight font-display">Popular Tour Packages</h3>
                <div class="w-16 h-[2px] bg-gradient-gold mx-auto mt-2"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $suggested_tours = [];
                foreach ($TOURS as $key => $tour) {
                    if (isset($tour['featured']) && $tour['featured']) {
                        $suggested_tours[$key] = $tour;
                        if (count($suggested_tours) >= 3) break;
                    }
                }
                if (count($suggested_tours) < 3) {
                    foreach ($TOURS as $key => $tour) {
                        if (!isset($suggested_tours[$key])) {
                            $suggested_tours[$key] = $tour;
                            if (count($suggested_tours) >= 3) break;
                        }
                    }
                }
                
                foreach ($suggested_tours as $key => $tour):
                ?>
                <div class="group bg-slate-900/40 backdrop-blur-md rounded-[32px] overflow-hidden flex flex-col justify-between border border-white/5 hover:border-brand/20 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_rgba(240,210,90,0.06)]">
                    <!-- Image Section -->
                    <div class="relative overflow-hidden aspect-[16/11] z-0">
                        <img src="<?php echo $tour['image']; ?>" alt="<?php echo $tour['title']; ?>" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/20 to-transparent"></div>
                        
                        <!-- Top Badges -->
                        <div class="absolute top-5 left-5 right-5 flex justify-between items-center pointer-events-none">
                            <!-- Rating -->
                            <div class="bg-slate-950/70 backdrop-blur-md border border-white/10 px-3 py-1 rounded-full text-white text-[11px] font-bold flex items-center space-x-1.5">
                                <i class="fa-solid fa-star text-brand"></i>
                                <span><?php echo $tour['rating']; ?></span>
                            </div>
                        </div>

                        <!-- Bottom Title -->
                        <div class="absolute bottom-5 left-6 right-6">
                            <span class="text-brand text-[10px] font-extrabold uppercase tracking-widest"><?php echo $tour['subtitle']; ?></span>
                            <h4 class="text-white text-xl font-bold font-display mt-1 leading-tight tracking-tight"><?php echo $tour['title']; ?></h4>
                        </div>
                    </div>

                    <!-- Details & Action -->
                    <div class="p-6 space-y-6 flex-grow flex flex-col justify-between">
                        <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-300">
                            <div class="flex items-center space-x-2.5">
                                <span class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-brand text-xs">
                                    <i class="fa-regular fa-clock"></i>
                                </span>
                                <div>
                                    <p class="text-[9px] text-slate-500 uppercase tracking-wider font-bold">Duration</p>
                                    <p class="text-[11px]"><?php echo $tour['duration']; ?></p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2.5">
                                <span class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-brand text-xs">
                                    <i class="fa-solid fa-route"></i>
                                </span>
                                <div>
                                    <p class="text-[9px] text-slate-500 uppercase tracking-wider font-bold">Type</p>
                                    <p class="text-[11px]">Private/Group</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing & CTA -->
                        <div class="pt-5 border-t border-white/5 flex justify-between items-center mt-auto">
                            <div>
                                <p class="text-[9px] text-slate-500 uppercase tracking-widest font-bold">Starting From</p>
                                <p class="text-lg font-black text-brand leading-none mt-1 font-display"><?php echo $tour['price']; ?></p>
                            </div>
                            <a href="<?php echo BASE_URL . $tour['link']; ?>" class="relative group/btn overflow-hidden px-5 py-2.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md whitespace-nowrap inline-flex items-center justify-center border border-white/15 transition-all duration-300">
                                <div class="absolute inset-0 bg-gradient-gold opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300 z-0"></div>
                                <span class="relative z-10 group-hover/btn:text-obsidian-950 transition-colors duration-300">Explore</span>
                                <i class="fa-solid fa-chevron-right ml-1.5 text-[9px] relative z-10 group-hover/btn:text-obsidian-950 transition-all duration-300 group-hover/btn:translate-x-1.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
