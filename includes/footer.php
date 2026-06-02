<?php
require_once __DIR__ . '/config.php';
?>
<!-- Premium Footer Section -->
<footer class="bg-obsidian-950 text-slate-300 pt-20 pb-24 md:pb-12 border-t border-white/5 relative z-10 overflow-hidden">
    <!-- Subtle Background Glows -->
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-brand/5 rounded-full blur-[150px] pointer-events-none"></div>
    <div class="absolute top-12 left-10 w-[300px] h-[300px] bg-brand-dark/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-[1440px] mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16">

            <!-- Column 1: Company Profile -->
            <div class="space-y-8">
                <a href="<?php echo BASE_URL; ?>" class="inline-block hover:opacity-90 transition-opacity">
                    <img src="<?php echo BASE_URL; ?>assets/images/brand/footer-logo.png" alt="<?php echo SITE_NAME; ?>"
                        class="h-14 w-auto object-contain">
                </a>
                <p class="text-sm text-slate-400 leading-relaxed font-light">
                    Explore Your Dream Trip is a premier luxury travel agency specializing in crafting tailored tour
                    experiences across India. We deliver seamless, high-end travel memories with our premium fleet and
                    expert local guides.
                </p>
                <div class="flex items-center space-x-3">
                    <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank"
                        class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:bg-brand/10 hover:text-brand-light hover:border-brand/40 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center text-sm shadow-md">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank"
                        class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:bg-brand/10 hover:text-brand-light hover:border-brand/40 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center text-sm shadow-md">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank"
                        class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:bg-brand/10 hover:text-brand-light hover:border-brand/40 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center text-sm shadow-md">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank"
                        class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 text-slate-300 hover:bg-brand/10 hover:text-brand-light hover:border-brand/40 hover:scale-105 active:scale-95 transition-all duration-300 flex items-center justify-center text-sm shadow-md">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="space-y-6">
                <h4 class="text-sm font-bold text-brand uppercase tracking-widest relative pb-3 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-[2px] after:bg-gradient-gold">
                    Quick Links
                </h4>
                <ul class="space-y-4 text-sm">
                    <li>
                        <a href="<?php echo BASE_URL; ?>" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-chevron-right text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:translate-x-1 transition-all duration-300"></i> Home Page
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>#destinations" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-chevron-right text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:translate-x-1 transition-all duration-300"></i> Popular Destinations
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>tours" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-chevron-right text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:translate-x-1 transition-all duration-300"></i> Our Tour Packages
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>tempo-traveller" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-chevron-right text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:translate-x-1 transition-all duration-300"></i> Tempo Traveller Rental
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>car-rental" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-chevron-right text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:translate-x-1 transition-all duration-300"></i> Premium Car Hire
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Fleet Offerings -->
            <div class="space-y-6">
                <h4 class="text-sm font-bold text-brand uppercase tracking-widest relative pb-3 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-[2px] after:bg-gradient-gold">
                    Our Premium Fleet
                </h4>
                <ul class="space-y-4 text-sm">
                    <li>
                        <a href="<?php echo BASE_URL; ?>tempo-traveller" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-crown text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:scale-110 transition-all duration-300"></i> 12 Seater Luxury Coach
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>tempo-traveller" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-crown text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:scale-110 transition-all duration-300"></i> 16 Seater Executive Coach
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>tempo-traveller" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-crown text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:scale-110 transition-all duration-300"></i> 20 Seater Luxury Liner
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>car-rental" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-gem text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:scale-110 transition-all duration-300"></i> Force Urbania Premium
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>car-rental" class="group flex items-center text-slate-400 hover:text-brand transition-colors">
                            <i class="fa-solid fa-car text-[10px] mr-2.5 text-brand/40 group-hover:text-brand group-hover:scale-110 transition-all duration-300"></i> Toyota Innova Crysta
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Contact & Support -->
            <div class="space-y-6">
                <h4 class="text-sm font-bold text-brand uppercase tracking-widest relative pb-3 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-10 after:h-[2px] after:bg-gradient-gold">
                    Contact Details
                </h4>
                <ul class="space-y-5 text-sm text-slate-400 font-light">
                    <li class="flex items-start space-x-3.5 group">
                        <div class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 text-brand flex items-center justify-center text-xs flex-shrink-0 group-hover:bg-brand/10 group-hover:border-brand/35 transition-all duration-300">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <span class="leading-relaxed"><?php echo CONTACT_ADDRESS; ?></span>
                    </li>
                    <li class="flex items-center space-x-3.5 group">
                        <div class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 text-brand flex items-center justify-center text-xs flex-shrink-0 group-hover:bg-brand/10 group-hover:border-brand/35 transition-all duration-300">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>" class="hover:text-brand transition-colors font-semibold"><?php echo CONTACT_PHONE; ?></a>
                    </li>
                    <li class="flex items-center space-x-3.5 group">
                        <div class="w-8 h-8 rounded-lg bg-white/5 border border-white/10 text-brand flex items-center justify-center text-xs flex-shrink-0 group-hover:bg-brand/10 group-hover:border-brand/35 transition-all duration-300">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="hover:text-brand transition-colors font-semibold break-all"><?php echo CONTACT_EMAIL; ?></a>
                    </li>
                    <li class="flex items-center space-x-3.5 group">
                        <div class="w-8 h-8 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs flex-shrink-0 group-hover:bg-emerald-500 group-hover:text-white group-hover:border-transparent transition-all duration-300">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <span>24/7 Concierge Service</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Trust Badges & Certification -->
        <div class="mt-16 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex flex-wrap justify-center md:justify-start gap-4">
                <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-xs hover:border-brand/30 hover:bg-white/10 transition-all duration-300">
                    <i class="fa-solid fa-shield-halved text-brand"></i>
                    <span>Secured Payments</span>
                </div>
                <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-xs hover:border-brand/30 hover:bg-white/10 transition-all duration-300">
                    <i class="fa-solid fa-award text-brand"></i>
                    <span>Govt. Authorized Agency</span>
                </div>
                <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-slate-300 text-xs hover:border-brand/30 hover:bg-white/10 transition-all duration-300">
                    <i class="fa-solid fa-thumbs-up text-brand"></i>
                    <span>100% Client Satisfaction</span>
                </div>
            </div>
            <div class="text-xs text-slate-500 text-center md:text-right font-light">
                &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved. Crafted with Luxury.
            </div>
        </div>
    </div>
</footer>

<!-- Floating Action Buttons -->

<!-- Floating WhatsApp Button -->
<a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" id="whatsapp-float"
    class="fixed bottom-6 right-6 w-14 h-14 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full hidden md:flex items-center justify-center shadow-2xl hover:scale-110 active:scale-95 transition-all duration-300 z-40 glow-emerald"
    aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp text-3xl"></i>
    <span class="absolute -top-1 -right-1 flex h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
        <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
    </span>
</a>

<!-- Back to Top Button -->
<button id="back-to-top"
    class="fixed bottom-6 left-6 w-12 h-12 bg-obsidian-900/90 border border-white/10 hover:bg-brand/10 hover:text-brand hover:border-brand/40 text-white rounded-full flex items-center justify-center shadow-2xl opacity-0 pointer-events-none transition-all duration-300 z-40"
    aria-label="Back to top">
    <i class="fa-solid fa-arrow-up text-lg"></i>
</button>

<!-- Mobile Sticky Quick CTA Bar (Only visible on Mobile viewports) -->
<div
    class="fixed bottom-0 left-0 w-full grid grid-cols-2 bg-obsidian-950/90 backdrop-blur-md border-t border-white/10 z-40 md:hidden shadow-2xl">
    <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
        class="flex justify-center items-center py-4 bg-transparent text-white border-r border-white/10 font-bold hover:bg-slate-900/40 transition-colors">
        <i class="fa-solid fa-phone text-brand mr-2"></i> Call Now
    </a>
    <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank"
        class="flex justify-center items-center py-4 bg-emerald-600 text-white font-bold hover:bg-emerald-700 transition-colors">
        <i class="fa-brands fa-whatsapp text-lg mr-2"></i> WhatsApp Us
    </a>
</div>

<!-- Core Main JS Script -->
<script src="<?php echo BASE_URL; ?>assets/js/main.js?v=<?php echo filemtime(__DIR__ . '/../assets/js/main.js'); ?>"></script>
</body>

</html>