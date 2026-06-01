<?php
$page_title = "Thank You – Explore Your Dream Trip";
$page_desc = "Thank you for contacting Explore Your Dream Trip. Our travel consultation desk will review your details and connect with you shortly.";
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<!-- Robots meta override (added via JS to prevent indexing of confirmation page) -->
<script>
    const meta = document.createElement('meta');
    meta.name = 'robots';
    meta.content = 'noindex, follow';
    document.getElementsByTagName('head')[0].appendChild(meta);
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     CONFIRMATION PANEL SECTION
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-36 md:py-48 bg-gradient-dark text-white flex-grow flex items-center justify-center relative z-10 overflow-hidden">
    <!-- Glow Details -->
    <div class="absolute top-1/4 left-1/3 w-[300px] h-[300px] bg-brand/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/3 w-[300px] h-[300px] bg-brand-dark/5 rounded-full blur-[100px] pointer-events-none" style="animation-delay: 2s;"></div>
    
    <div class="max-w-xl w-full mx-auto px-4 relative z-10">
        <div class="bg-slate-900/40 backdrop-blur-md rounded-[40px] border border-white/5 p-8 md:p-12 shadow-2xl text-center space-y-8 border-luxury-gold hover:shadow-[0_20px_50px_rgba(240,210,90,0.1)] transition-all duration-500">
            
            <!-- Success Animated Check Badge -->
            <div class="w-20 h-20 bg-emerald-500/10 border border-emerald-500/20 rounded-full flex items-center justify-center text-emerald-400 text-4xl mx-auto shadow-sm animate-pulse">
                <i class="fa-solid fa-circle-check"></i>
            </div>

            <!-- Headings -->
            <div class="space-y-3">
                <span class="text-brand font-bold text-xs uppercase tracking-[0.2em]">Inquiry Submitted</span>
                <h1 class="text-3xl md:text-4xl font-black text-white leading-tight font-display tracking-tight">
                    Thank You For <br>
                    <span class="text-gradient-gold">Choosing Us!</span>
                </h1>
            </div>

            <!-- Descriptive Text -->
            <div class="text-slate-300 text-sm md:text-base space-y-4 font-medium leading-relaxed max-w-sm mx-auto">
                <p>
                    Your travel details have been successfully forwarded to our premium consultation desk. 
                </p>
                <p class="text-slate-400">
                    A dedicated travel specialist is now reviewing your options and will contact you via **call or WhatsApp** within the next **2 to 4 hours** with customized itineraries.
                </p>
            </div>

            <!-- Divider -->
            <div class="gold-fade-divider"></div>

            <!-- Call to Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?php echo BASE_URL; ?>" 
                    class="w-full sm:w-auto relative group overflow-hidden px-6 py-3 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md inline-flex items-center justify-center transition-all duration-300 border border-white/10">
                    <div class="absolute inset-0 bg-gradient-gold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0"></div>
                    <span class="relative z-10 group-hover:text-obsidian-950 transition-colors duration-300">Back To Home</span>
                </a>
                <a href="<?php echo BASE_URL; ?>tours.php" 
                    class="w-full sm:w-auto relative group overflow-hidden px-6 py-3 bg-white/5 hover:bg-white/10 text-white/90 hover:text-white border border-white/10 hover:border-white/20 rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-sm inline-flex items-center justify-center transition-all duration-300">
                    <span>Explore Packages</span>
                </a>
                <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" 
                    class="w-full sm:w-auto px-6 py-3 bg-emerald-500 hover:bg-emerald-600 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md inline-flex items-center justify-center transition-colors duration-300">
                    <i class="fa-brands fa-whatsapp mr-1.5 text-sm"></i> WhatsApp Us
                </a>
            </div>

        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
