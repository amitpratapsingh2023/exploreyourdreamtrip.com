<?php
$page_title = "About Us – Luxury Travel Agency & Tour Operator";
$page_desc = "Learn about Explore Your Dream Trip, India's premier luxury travel agency. Our mission is to create unforgettable experiences with customized tours and premium fleet rentals. Read our story and values.";
require_once 'includes/config.php';

// Custom breadcrumb for this page
$breadcrumb_custom = [
    ['title' => 'About Us', 'url' => '', 'active' => true],
];

require_once 'includes/header.php';
?>

<!-- Structured Data (JSON-LD) - Organization Schema for About Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "<?php echo SITE_NAME; ?>",
  "url": "<?php echo BASE_URL; ?>",
  "logo": "<?php echo BASE_URL; ?>assets/images/brand/header-logo.png",
  "description": "Explore Your Dream Trip is a premier luxury travel agency specializing in crafting tailored tour experiences across India. We deliver seamless, high-end travel memories with our premium fleet and expert local guides.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php echo CONTACT_ADDRESS; ?>",
    "addressLocality": "New Delhi",
    "postalCode": "110042",
    "addressCountry": "IN"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "<?php echo CONTACT_PHONE; ?>",
    "contactType": "customer service",
    "email": "<?php echo CONTACT_EMAIL; ?>",
    "availableLanguage": ["English", "Hindi"]
  },
  "sameAs": [
    "<?php echo SOCIAL_FACEBOOK; ?>",
    "<?php echo SOCIAL_INSTAGRAM; ?>",
    "<?php echo SOCIAL_TWITTER; ?>",
    "<?php echo SOCIAL_YOUTUBE; ?>"
  ]
}
</script>

<!-- BreadcrumbList JSON-LD -->
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
      "name": "About Us",
      "item": "<?php echo BASE_URL; ?>about.php"
    }
  ]
}
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 1: PREMIUM HERO BANNER
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="relative min-h-[50vh] md:min-h-[55vh] flex items-end bg-obsidian-950 overflow-hidden pt-36 pb-16 md:pb-20">
    <!-- Background Image with vignette and gradient overlays -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&q=80&w=1200" alt="About Explore Your Dream Trip"
            class="w-full h-full object-cover object-center opacity-25 scale-105 transition-transform duration-1000">
        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/70 to-obsidian-950/20"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-obsidian-950/85 via-transparent to-obsidian-950/20"></div>
        <div class="absolute inset-0 luxury-vignette opacity-70"></div>
    </div>

    <!-- Animated Glows -->
    <div class="absolute top-1/4 right-1/4 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] animate-pulse pointer-events-none"></div>
    <div class="absolute bottom-1/3 left-1/3 w-[300px] h-[300px] bg-brand-dark/5 rounded-full blur-[100px] animate-pulse pointer-events-none" style="animation-delay: 1.5s;"></div>

    <!-- Content Container -->
    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full space-y-7 text-center">
        <!-- Breadcrumb -->
        <div class="flex justify-center">
            <?php require 'includes/breadcrumb.php'; ?>
        </div>

        <!-- Subtitle Badge -->
        <span class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-brand/10 border border-brand/25 text-brand text-[11px] font-extrabold uppercase tracking-[0.18em] shadow-[0_2px_20px_rgba(240,210,90,0.15)]">
            <i class="fa-solid fa-address-card text-[9px]"></i>
            <span>Who We Are</span>
        </span>

        <!-- Page Title -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight font-display tracking-tight max-w-4xl mx-auto">
            Discover Our Story & <br class="hidden sm:inline">
            <span class="text-gradient-gold">Luxury Travel Standards</span>
        </h1>

        <p class="text-slate-300 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-medium">
            Over a decade of creating bespoke private tours and premium rentals across India. We believe every journey should feel like a dream.
        </p>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 2: COMPANY INTRODUCTION & STORY
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-white relative z-10">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left: Text details -->
            <div class="lg:col-span-7 space-y-6">
                <span class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Our Heritage</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-obsidian-950 leading-tight font-display">
                    Crafting Incomparable <br class="hidden sm:inline">
                    <span class="text-gradient-gold">Indian Holiday Journeys</span>
                </h2>
                <div class="text-slate-700 text-sm md:text-base space-y-4 font-medium leading-relaxed">
                    <p>
                        Founded with a simple goal to bridge the gap between tourist travel and luxury hospitality, Explore Your Dream Trip has grown into India's most trusted luxury travel agency and custom fleet operator. From private family groups visiting the heritage sites of Agra and Jaipur to corporate delegates traversing national routes, we orchestrate experiences that linger forever.
                    </p>
                    <p>
                        We operate our own premium fleet of luxury sedans, off-road SUVs, and customized executive Tempo Travellers. Since we own and manage our fleet directly, we guarantee unmatched cleanliness, punctual chauffeured transits, and strict compliance with high security guidelines.
                    </p>
                    <p>
                        Our local guides are certified heritage experts who bring historical context and folklore to life. Backed by 24/7 concierge assistance and a secure booking workflow, we eliminate travel stresses so you can fully immerse in India's spiritual and natural marvels.
                    </p>
                </div>
            </div>

            <!-- Right: Premium Image -->
            <div class="lg:col-span-5 relative">
                <div class="absolute inset-0 bg-gradient-gold rounded-[40px] rotate-3 opacity-20 pointer-events-none scale-102"></div>
                <div class="relative overflow-hidden rounded-[36px] aspect-[4/3] sm:aspect-[16/11] border border-slate-100 shadow-xl z-10">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?auto=format&fit=crop&q=80&w=600" alt="Traveler exploring Taj Mahal"
                        class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 3: MISSION & VISION SECTION
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-slate-50 relative z-10 border-y border-slate-200/60">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            <!-- Mission Card -->
            <div class="group p-8 md:p-10 bg-white rounded-[32px] border border-slate-100 shadow-sm hover:shadow-[0_20px_45px_rgba(15,23,42,0.04)] border-luxury-gold hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-300 space-y-6">
                <div class="w-14 h-14 bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-2xl rounded-2xl shadow-sm">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3 class="text-2xl font-bold font-display text-obsidian-950 group-hover:text-brand transition-colors duration-300">Our Mission</h3>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed font-medium">
                    To redefine Indian travel hospitality through bespoke itineraries, top-tier private vehicles, and flawless hospitality. We are committed to making premium travel secure, customizable, and exceptionally memorable for families and corporate groups alike.
                </p>
            </div>

            <!-- Vision Card -->
            <div class="group p-8 md:p-10 bg-white rounded-[32px] border border-slate-100 shadow-sm hover:shadow-[0_20px_45px_rgba(15,23,42,0.04)] border-luxury-gold hover:border-brand/35 hover:-translate-y-1.5 transition-all duration-300 space-y-6">
                <div class="w-14 h-14 bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-2xl rounded-2xl shadow-sm">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <h3 class="text-2xl font-bold font-display text-obsidian-950 group-hover:text-brand transition-colors duration-300">Our Vision</h3>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed font-medium">
                    To become India's foremost luxury tour operator, inspiring global travelers to discover the deep heritage, spirituality, and scenic beauty of India in ultimate comfort. We aim to continually expand our custom fleet and set industry standards for eco-friendly luxury travel.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 4: KEY STATS & HIGHLIGHTS
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-obsidian-950 text-white relative overflow-hidden">
    <!-- Glow Effect in Background -->
    <div class="absolute top-1/4 left-1/4 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-brand-dark/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-[1440px] mx-auto px-4 relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 text-center">
            
            <!-- Stat 1 -->
            <div class="p-6 bg-slate-900/40 border border-white/5 rounded-[28px] hover:border-brand/25 transition-colors duration-300">
                <h3 class="text-4xl md:text-5xl font-black text-brand font-display">15,000+</h3>
                <p class="text-slate-400 text-[10px] sm:text-xs uppercase tracking-widest font-extrabold mt-3">Happy Guests Served</p>
            </div>

            <!-- Stat 2 -->
            <div class="p-6 bg-slate-900/40 border border-white/5 rounded-[28px] hover:border-brand/25 transition-colors duration-300">
                <h3 class="text-4xl md:text-5xl font-black text-brand font-display">99.8%</h3>
                <p class="text-slate-400 text-[10px] sm:text-xs uppercase tracking-widest font-extrabold mt-3">5-Star Reviews</p>
            </div>

            <!-- Stat 3 -->
            <div class="p-6 bg-slate-900/40 border border-white/5 rounded-[28px] hover:border-brand/25 transition-colors duration-300">
                <h3 class="text-4xl md:text-5xl font-black text-brand font-display">10+</h3>
                <p class="text-slate-400 text-[10px] sm:text-xs uppercase tracking-widest font-extrabold mt-3">Years of Excellence</p>
            </div>

            <!-- Stat 4 -->
            <div class="p-6 bg-slate-900/40 border border-white/5 rounded-[28px] hover:border-brand/25 transition-colors duration-300">
                <h3 class="text-4xl md:text-5xl font-black text-brand font-display">25+</h3>
                <p class="text-slate-400 text-[10px] sm:text-xs uppercase tracking-widest font-extrabold mt-3">Premium Vehicles</p>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 5: WHY CHOOSE US GRID
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-white relative z-10">
    <div class="max-w-[1440px] mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Why Choose Us</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">The Luxury Standard</h2>
            <p class="text-slate-600 text-sm md:text-base">We stand out because of our continuous commitment to luxury, guest safety, and transparent guidelines.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group p-8 bg-slate-50 rounded-[32px] border border-slate-200/60 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(15,23,42,0.04)] space-y-5">
                <div class="w-12 h-12 bg-white text-brand rounded-2xl flex items-center justify-center text-xl border border-slate-200 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-award"></i>
                </div>
                <h3 class="text-xl font-bold text-obsidian-950 font-display group-hover:text-brand transition-colors duration-300">Govt. Certified operator</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Fully registered and authorized by the Ministry of Tourism, strictly complying with standard safety guidelines.</p>
            </div>

            <!-- Feature 2 -->
            <div class="group p-8 bg-slate-50 rounded-[32px] border border-slate-200/60 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(15,23,42,0.04)] space-y-5">
                <div class="w-12 h-12 bg-white text-brand rounded-2xl flex items-center justify-center text-xl border border-slate-200 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-sliders"></i>
                </div>
                <h3 class="text-xl font-bold text-obsidian-950 font-display group-hover:text-brand transition-colors duration-300">Tailored Itineraries</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Flexible travel schedules, customized hotels, and choice of cars to let you explore India at your own customized pace.</p>
            </div>

            <!-- Feature 3 -->
            <div class="group p-8 bg-slate-50 rounded-[32px] border border-slate-200/60 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(15,23,42,0.04)] space-y-5">
                <div class="w-12 h-12 bg-white text-brand rounded-2xl flex items-center justify-center text-xl border border-slate-200 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3 class="text-xl font-bold text-obsidian-950 font-display group-hover:text-brand transition-colors duration-300">24/7 Concierge Support</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Continuous on-call assistance for booking queries, route adjustments, delays, and passenger support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Lead Capture Inquiry Form -->
<?php require_once 'includes/cta.php'; ?>

<?php
require_once 'includes/footer.php';
?>
