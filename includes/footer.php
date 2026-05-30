<?php
require_once __DIR__ . '/config.php';
?>
<!-- Premium Footer Section -->
<footer class="bg-obsidian-950 text-slate-300 pt-16 pb-24 md:pb-12 border-t border-white/5 relative z-10">
    <div class="max-w-[1440px] mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

        <!-- Column 1: Company Profile -->
        <div class="space-y-6">
            <a href="<?php echo BASE_URL; ?>">
                <img src="<?php echo BASE_URL; ?>assets/images/brand/footer-logo.png" alt="<?php echo SITE_NAME; ?>"
                    class="h-14 w-auto object-contain">
            </a>
            <p class="text-sm text-slate-400 leading-relaxed">
                Explore Your Dream Trip is a premier luxury travel agency specializing in crafting tailored tour
                experiences across India. We deliver seamless, high-end travel memories with our premium fleet and
                expert local guides.
            </p>
            <div class="flex items-center space-x-3">
                <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank"
                    class="w-10 h-10 rounded-full bg-white/5 hover:bg-brand hover:text-obsidian-950 flex items-center justify-center text-white transition-all duration-300">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank"
                    class="w-10 h-10 rounded-full bg-white/5 hover:bg-brand hover:text-obsidian-950 flex items-center justify-center text-white transition-all duration-300">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank"
                    class="w-10 h-10 rounded-full bg-white/5 hover:bg-brand hover:text-obsidian-950 flex items-center justify-center text-white transition-all duration-300">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank"
                    class="w-10 h-10 rounded-full bg-white/5 hover:bg-brand hover:text-obsidian-950 flex items-center justify-center text-white transition-all duration-300">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="space-y-6">
            <h4
                class="text-lg font-bold text-white relative after:content-[''] after:block after:w-12 after:h-0.5 after:bg-brand after:mt-2">
                Quick Links</h4>
            <ul class="space-y-3 text-sm">
                <li>
                    <a href="<?php echo BASE_URL; ?>" class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-chevron-right text-xs mr-2 text-brand"></i> Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>#destinations"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-chevron-right text-xs mr-2 text-brand"></i> Popular Destinations
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>tempo-traveller.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-chevron-right text-xs mr-2 text-brand"></i> Tempo Traveller Rental
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>car-rental.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-chevron-right text-xs mr-2 text-brand"></i> Premium Car Hire
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>about.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-chevron-right text-xs mr-2 text-brand"></i> About Our Company
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>contact.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-chevron-right text-xs mr-2 text-brand"></i> Contact Customer Support
                    </a>
                </li>
            </ul>
        </div>

        <!-- Column 3: Fleet Offerings -->
        <div class="space-y-6">
            <h4
                class="text-lg font-bold text-white relative after:content-[''] after:block after:w-12 after:h-0.5 after:bg-brand after:mt-2">
                Our Premium Fleet</h4>
            <ul class="space-y-3 text-sm">
                <li>
                    <a href="<?php echo BASE_URL; ?>tempo-traveller.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-car text-xs mr-2 text-brand"></i> 12 Seater Luxury Coach
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>tempo-traveller.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-car text-xs mr-2 text-brand"></i> 16 Seater Executive Coach
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>tempo-traveller.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-car text-xs mr-2 text-brand"></i> 20 Seater Luxury Liner
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>car-rental.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-car text-xs mr-2 text-brand"></i> Force Urbania Premium
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>car-rental.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-car text-xs mr-2 text-brand"></i> Toyota Innova Crysta
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>car-rental.php"
                        class="hover:text-brand flex items-center transition-colors">
                        <i class="fa-solid fa-car text-xs mr-2 text-brand"></i> Swift Dzire Sedan
                    </a>
                </li>
            </ul>
        </div>

        <!-- Column 4: Contact & Support -->
        <div class="space-y-6">
            <h4
                class="text-lg font-bold text-white relative after:content-[''] after:block after:w-12 after:h-0.5 after:bg-brand after:mt-2">
                Contact Details</h4>
            <ul class="space-y-4 text-sm text-slate-400">
                <li class="flex items-start space-x-3">
                    <i class="fa-solid fa-location-dot text-brand text-lg mt-0.5"></i>
                    <span><?php echo CONTACT_ADDRESS; ?></span>
                </li>
                <li class="flex items-center space-x-3">
                    <i class="fa-solid fa-phone text-brand text-base"></i>
                    <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
                        class="hover:text-white transition-colors"><?php echo CONTACT_PHONE; ?></a>
                </li>
                <li class="flex items-center space-x-3">
                    <i class="fa-solid fa-envelope text-brand text-base"></i>
                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>"
                        class="hover:text-white transition-colors"><?php echo CONTACT_EMAIL; ?></a>
                </li>
                <li class="flex items-center space-x-3">
                    <i class="fa-solid fa-clock text-brand text-base"></i>
                    <span>24/7 Available for Bookings</span>
                </li>
            </ul>
        </div>

    </div>

    <!-- Trust Badges & Certification -->
    <div
        class="max-w-[1440px] mx-auto px-4 mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex flex-wrap justify-center md:justify-start gap-4">
            <div class="flex items-center bg-white/5 border border-white/10 rounded px-3 py-1.5 text-xs text-slate-300">
                <i class="fa-solid fa-shield-halved text-brand mr-2"></i> Secured Payments
            </div>
            <div class="flex items-center bg-white/5 border border-white/10 rounded px-3 py-1.5 text-xs text-slate-300">
                <i class="fa-solid fa-award text-brand mr-2"></i> Govt. Authorized Agency
            </div>
            <div class="flex items-center bg-white/5 border border-white/10 rounded px-3 py-1.5 text-xs text-slate-300">
                <i class="fa-solid fa-thumbs-up text-brand mr-2"></i> 100% Client Satisfaction
            </div>
        </div>
        <div class="text-xs text-slate-400 text-center md:text-right">
            &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.
        </div>
    </div>
</footer>

<!-- Floating Action Buttons -->

<!-- Floating WhatsApp Button -->
<a href="<?php echo WHATSAPP_LINK; ?>" target="_blank" id="whatsapp-float"
    class="fixed bottom-6 right-6 w-14 h-14 bg-emerald-500 hover:bg-emerald-600 text-white rounded-full flex items-center justify-center shadow-2xl hover:scale-110 active:scale-95 transition-all duration-300 z-40 glow-emerald"
    aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp text-3xl"></i>
    <span class="absolute -top-1 -right-1 flex h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
        <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
    </span>
</a>

<!-- Back to Top Button -->
<button id="back-to-top"
    class="fixed bottom-6 left-6 w-12 h-12 bg-obsidian-900/90 border border-white/10 hover:bg-brand hover:text-obsidian-950 text-white rounded-full flex items-center justify-center shadow-2xl opacity-0 pointer-events-none transition-all duration-300 z-40"
    aria-label="Back to top">
    <i class="fa-solid fa-arrow-up text-lg"></i>
</button>

<!-- Mobile Sticky Quick CTA Bar (Only visible on Mobile viewports) -->
<div
    class="fixed bottom-0 left-0 w-full grid grid-cols-2 bg-obsidian-950 border-t border-white/10 z-40 md:hidden shadow-2xl">
    <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
        class="flex justify-center items-center py-4 bg-obsidian-950 text-white border-r border-white/10 font-bold hover:bg-slate-900 transition-colors">
        <i class="fa-solid fa-phone text-brand mr-2"></i> Call Now
    </a>
    <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank"
        class="flex justify-center items-center py-4 bg-emerald-600 text-white font-bold hover:bg-emerald-700 transition-colors">
        <i class="fa-brands fa-whatsapp text-lg mr-2"></i> WhatsApp Us
    </a>
</div>

<!-- Core Main JS Script -->
<script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>
</body>

</html>