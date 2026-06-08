<?php
$page_title = "Premium Car Rental Service in Delhi – Luxury Sedan & SUV Hire";
$page_desc = "Hire premium chauffeur-driven cars in Delhi. Book Innova Crysta, Swift Dzire, Ertiga, and Force Urbania for outstation tours and local corporate travel. Affordable luxury car rental at the best prices.";
require_once 'includes/config.php';

// Custom breadcrumb for this page
$breadcrumb_custom = [
    ['title' => 'Car Rental', 'url' => '', 'active' => true],
];

require_once 'includes/header.php';
?>

<!-- Structured Data (JSON-LD) - Product/Service Schema for Car Rental -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Premium Car Rental Services - Explore Your Dream Trip",
  "description": "Book luxury chauffeur-driven cars (Swift Dzire, Ertiga, Innova Crysta, and Force Urbania) in Delhi NCR for corporate travel, airport transfers, and outstation trips. Clean, sanitized cabs with professional drivers.",
  "image": [
    "<?php echo BASE_URL; ?>assets/images/fleet/dzire.png",
    "<?php echo BASE_URL; ?>assets/images/fleet/innova-crysta.webp",
    "<?php echo BASE_URL; ?>assets/images/fleet/ertiga.webp",
    "<?php echo BASE_URL; ?>assets/images/fleet/force-urbania.jpg"
  ],
  "brand": {
    "@type": "Brand",
    "name": "<?php echo SITE_NAME; ?>"
  },
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": "12",
    "highPrice": "28",
    "offerCount": "4",
    "priceValuedOnlyTo": "per kilometer",
    "offers": [
      {
        "@type": "Offer",
        "name": "Swift Dzire (Sedan) Hire",
        "price": "12",
        "priceCurrency": "INR"
      },
      {
        "@type": "Offer",
        "name": "Maruti Suzuki Ertiga (MUV) Hire",
        "price": "14",
        "priceCurrency": "INR"
      },
      {
        "@type": "Offer",
        "name": "Toyota Innova Crysta (SUV) Hire",
        "price": "18",
        "priceCurrency": "INR"
      },
      {
        "@type": "Offer",
        "name": "Force Urbania Premium Cruiser Hire",
        "price": "28",
        "priceCurrency": "INR"
      }
    ]
  }
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
      "name": "Car Rental",
      "item": "<?php echo BASE_URL; ?>car-rental.php"
    }
  ]
}
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 1: PREMIUM HERO BANNER
     ═══════════════════════════════════════════════════════════════════════ -->
<section
    class="relative min-h-[55vh] md:min-h-[60vh] flex items-end bg-obsidian-950 overflow-hidden pt-36 pb-16 md:pb-20">
    <!-- Background Image with vignette and gradient overlays -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo BASE_URL; ?>assets/images/fleet/dzire.png" alt="Premium Car Rental Service"
            class="w-full h-full object-cover object-center opacity-25 scale-105 transition-transform duration-1000">
        <div class="absolute inset-0 bg-gradient-to-t from-obsidian-950 via-obsidian-950/70 to-obsidian-950/20"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-obsidian-950/85 via-transparent to-obsidian-950/20"></div>
        <div class="absolute inset-0 luxury-vignette opacity-70"></div>
    </div>

    <!-- Animated Glows -->
    <div
        class="absolute top-1/4 right-1/4 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] animate-pulse pointer-events-none">
    </div>
    <div class="absolute bottom-1/3 left-1/3 w-[300px] h-[300px] bg-brand-dark/5 rounded-full blur-[100px] animate-pulse pointer-events-none"
        style="animation-delay: 1.5s;"></div>

    <!-- Content Container -->
    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full space-y-7 text-center">
        <!-- Breadcrumb -->
        <div class="flex justify-center">
            <?php require 'includes/breadcrumb.php'; ?>
        </div>

        <!-- Subtitle Badge -->
        <span
            class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-brand/10 border border-brand/25 text-brand text-[11px] font-extrabold uppercase tracking-[0.18em] shadow-[0_2px_20px_rgba(240,210,90,0.15)]">
            <i class="fa-solid fa-car text-[9px]"></i>
            <span>Chauffeur Driven Car Rentals</span>
        </span>

        <!-- Page Title -->
        <h1
            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight font-display tracking-tight max-w-4xl mx-auto">
            Premium Car Rentals <br class="hidden sm:inline">
            <span class="text-gradient-gold">Delhi Outstation & Local</span>
        </h1>

        <p class="text-slate-300 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-medium">
            Travel in style and security. Select from our curated fleet of top-tier sedans, luxurious SUVs, and spacious
            cruiser cabs, driven by polite, verified chauffeurs.
        </p>

        <!-- Trust Indicators inside Hero -->
        <div
            class="flex flex-wrap justify-center items-center gap-x-6 gap-y-3 pt-3 text-[10px] sm:text-[11px] font-bold text-slate-300 uppercase tracking-widest">
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-user-tie text-brand text-[9px]"></i>
                <span>Chauffeur Driven</span>
            </div>
            <div class="w-1.5 h-1.5 rounded-full bg-brand/40 hidden md:block"></div>
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-snowflake text-brand text-[9px]"></i>
                <span>AC Climate Control</span>
            </div>
            <div class="w-1.5 h-1.5 rounded-full bg-brand/40 hidden md:block"></div>
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-shield text-brand text-[9px]"></i>
                <span>Fully Sanitized Cabs</span>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 2: LUXURY VALUE STRIP
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="relative z-20 -mt-10 px-4 max-w-[1440px] mx-auto">
    <div class="glass-nav rounded-[28px] border border-brand/20 p-6 md:p-8 shadow-2xl glow-gold">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-6 sm:gap-y-8 lg:gap-y-0 lg:divide-x lg:divide-white/10">
            <!-- Item 1 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-user-tie text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Professional
                        Drivers</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Highly experienced,
                        background-verified, and polite chauffeurs</p>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-map-location-dot text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">GPS Safe Fleet
                    </h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">All vehicles tracked live for
                        occupant safety & peace of mind</p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-broom text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Spotless
                        Vehicles</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Deep cleaned and sanitized
                        cabins before every reservation</p>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-tags text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Transparent
                        Billing</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Fixed quotes with zero hidden
                        booking helper charges</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 3: LUXURY VEHICLES GRID
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-slate-50 relative z-10" id="fleet-section">
    <div class="max-w-[1440px] mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Choose
                Your Ride</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">Our Premium Fleet</h2>
            <p class="text-slate-600 text-sm md:text-base">We present our highly maintained cars for rent. From compact
                family sedans to premium luxury cruisers.</p>
        </div>

        <!-- Fleet Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($CARS as $key => $car): ?>
                <div
                    class="group/card bg-white rounded-[32px] overflow-hidden flex flex-col justify-between border border-slate-100 shadow-sm hover:shadow-[0_20px_45px_rgba(15,23,42,0.06)] hover:border-brand/35 hover:-translate-y-2.5 transition-all duration-500">
                    <!-- Vehicle Image -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-100 z-0">
                        <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['title']; ?>"
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover/card:scale-105">

                        <!-- Soft overlays -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-slate-950/10 to-transparent">
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="text-slate-900 bg-white/95 backdrop-blur-md border border-slate-200/50 px-3.5 py-1.5 rounded-full text-[9px] font-bold uppercase tracking-wider flex items-center space-x-1.5 shadow-sm">
                                <i class="fa-solid fa-shield-check text-brand-accent text-[9px]"></i>
                                <span>Chauffeur Cabin</span>
                            </span>
                        </div>
                    </div>

                    <!-- Card Body & Info -->
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-6">
                        <div class="space-y-4">
                            <h3
                                class="text-lg font-bold font-display text-obsidian-950 transition-colors duration-300 group-hover/card:text-brand-accent leading-tight line-clamp-1">
                                <?php echo $car['title']; ?>
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="text-[10px] text-brand-accent bg-brand/10 border border-brand/20 px-3 py-1 rounded-full font-bold uppercase tracking-wider flex items-center gap-1">
                                    <i class="fa-solid fa-users text-[9px]"></i> <?php echo $car['capacity']; ?>
                                </span>
                                <span
                                    class="text-[10px] text-slate-500 bg-slate-100 border border-slate-200/60 px-3 py-1 rounded-full font-semibold uppercase tracking-wider flex items-center gap-1">
                                    <i class="fa-solid fa-snowflake text-[9px]"></i> AC Cab
                                </span>
                            </div>
                        </div>

                        <!-- Amenities List -->
                        <ul class="space-y-2.5 text-xs font-medium text-slate-600 pt-2 border-t border-slate-100/60">
                            <?php foreach ($car['features'] as $feature): ?>
                                <li class="flex items-start">
                                    <span
                                        class="w-5 h-5 rounded-full bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-[8px] mr-2.5 mt-0.5 flex-shrink-0">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    <span><?php echo htmlspecialchars($feature); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <!-- Bottom Section: Pricing & Action -->
                        <div class="pt-6 border-t border-slate-100 flex justify-between items-center mt-auto">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Starting Rate</p>
                                <?php if (empty($car['price']) || $car['price'] == '0'): ?>
                                    <p class="text-xs font-bold text-brand-accent font-display leading-none mt-1.5">
                                        Contact Us for Best Price
                                    </p>
                                <?php else: ?>
                                    <p class="text-xl font-black text-obsidian-950 font-display leading-none mt-1">
                                        <?php echo $car['price']; ?>
                                    </p>
                                <?php endif; ?>
                            </div>

                            <a href="#inquiry"
                                onclick="selectCarService('car-rental', '<?php echo addslashes($car['title']); ?>')"
                                class="relative group/btn overflow-hidden px-5 py-2.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md whitespace-nowrap inline-flex items-center justify-center transition-all duration-300 border border-white/10">
                                <div
                                    class="absolute inset-0 bg-gradient-gold opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <span
                                    class="relative z-10 group-hover/btn:text-obsidian-950 transition-colors duration-300">Book
                                    Now</span>
                                <i
                                    class="fa-solid fa-chevron-right ml-1.5 text-[9px] relative z-10 group-hover/btn:text-obsidian-950 transition-all duration-300 group-hover/btn:translate-x-1.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 4: AMENITIES & FEATURES HIGHLIGHT GRID
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-obsidian-950 text-white relative overflow-hidden border-t border-white/5">
    <!-- Glow Effect in Background -->
    <div class="absolute top-1/4 left-1/4 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[120px] pointer-events-none">
    </div>
    <div
        class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-brand-dark/5 rounded-full blur-[120px] pointer-events-none">
    </div>

    <div class="max-w-[1440px] mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-brand text-xs font-bold uppercase tracking-wider">
                <i class="fa-solid fa-gem text-xs"></i>
                <span>Chauffeur Drive Perks</span>
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                Premium Passenger <span class="text-gradient-gold font-display">Experience</span>
            </h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Enjoy customized travel services on board our luxury fleet, included standard across all car rentals.
            </p>
        </div>

        <!-- Amenities Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Item 1 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    Punctual Pickups</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Our drivers arrive at least 15 minutes before the
                    scheduled time to ensure a stress-free departure every single time.</p>
            </div>

            <!-- Item 2 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-location-arrow"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    Expert Route Navigation</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Highly trained chauffeurs who are well-versed in
                    optimal routes, expressways, and shortcuts to avoid heavy city traffic.</p>
            </div>

            <!-- Item 3 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-water"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    Bottled Water & Newspaper</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Complimentary packed mineral water bottles and fresh
                    daily newspaper provided in the cabin for your comfort.</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 5: IDEAL TRAVEL USE CASES
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Versatile
                Services</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">Rental Use Cases</h2>
            <p class="text-slate-600 text-sm md:text-base">Our premium sedans and SUVs are perfect for a variety of
                corporate, personal, and leisure trip setups.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Case 1 -->
            <div
                class="group bg-white rounded-[28px] border border-slate-100 p-6 shadow-sm hover:shadow-[0_15px_35px_rgba(15,23,42,0.05)] transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-base shadow-sm">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="text-lg font-bold font-display text-obsidian-950">Corporate Transfers</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Reliable, professional chauffeured cars for VIP
                        clients, executive transfers, business meetings, and hotel transits.</p>
                </div>
                <div
                    class="pt-4 border-t border-slate-100 mt-6 text-[10px] text-brand-accent font-bold uppercase tracking-wider flex items-center gap-1.5">
                    <span>Innova Crysta, Sedan</span>
                </div>
            </div>

            <!-- Case 2 -->
            <div
                class="group bg-white rounded-[28px] border border-slate-100 p-6 shadow-sm hover:shadow-[0_15px_35px_rgba(15,23,42,0.05)] transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-base shadow-sm">
                        <i class="fa-solid fa-plane-arrival"></i>
                    </div>
                    <h3 class="text-lg font-bold font-display text-obsidian-950">IGI Airport Transfers</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">24/7 dedicated airport drop-off and pickup
                        assistance with guaranteed on-time arrivals and flight tracking updates.</p>
                </div>
                <div
                    class="pt-4 border-t border-slate-100 mt-6 text-[10px] text-brand-accent font-bold uppercase tracking-wider flex items-center gap-1.5">
                    <span>Delhi Airport Pickups</span>
                </div>
            </div>

            <!-- Case 3 -->
            <div
                class="group bg-white rounded-[28px] border border-slate-100 p-6 shadow-sm hover:shadow-[0_15px_35px_rgba(15,23,42,0.05)] transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-base shadow-sm">
                        <i class="fa-solid fa-route"></i>
                    </div>
                    <h3 class="text-lg font-bold font-display text-obsidian-950">Outstation Roundtrips</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Hire a car for multiple days to visit Agra,
                        Jaipur, Shimla, Haridwar, or Rishikesh at your own customized pace.</p>
                </div>
                <div
                    class="pt-4 border-t border-slate-100 mt-6 text-[10px] text-brand-accent font-bold uppercase tracking-wider flex items-center gap-1.5">
                    <span>Agra, Haridwar, Jaipur</span>
                </div>
            </div>

            <!-- Case 4 -->
            <div
                class="group bg-white rounded-[28px] border border-slate-100 p-6 shadow-sm hover:shadow-[0_15px_35px_rgba(15,23,42,0.05)] transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-base shadow-sm">
                        <i class="fa-solid fa-gift"></i>
                    </div>
                    <h3 class="text-lg font-bold font-display text-obsidian-950">Events & Weddings</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Premium fleet support to transport wedding guests,
                        families, and attendees in well-synchronized neat vehicles.</p>
                </div>
                <div
                    class="pt-4 border-t border-slate-100 mt-6 text-[10px] text-brand-accent font-bold uppercase tracking-wider flex items-center gap-1.5">
                    <span>Wedding Cabs Service</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 6: RENTAL FAQ SECTION
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-white relative z-10 border-t border-slate-100">
    <div class="max-w-[1440px] mx-auto px-4">
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Rental
                Info</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">FAQs & Guidelines</h2>
            <p class="text-slate-600 text-sm md:text-base">Transparent guidelines regarding car rental rates,
                allowances, and booking rules.</p>
        </div>

        <div class="max-w-3xl mx-auto space-y-5">
            <!-- FAQ 1 -->
            <div
                class="faq-item bg-slate-50 rounded-[24px] border border-slate-200/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-btn w-full text-left p-6 flex items-center justify-between gap-4 font-semibold text-obsidian-950 focus:outline-none hover:bg-slate-100/60 transition-colors">
                    <span class="text-sm md:text-base font-bold font-display">Is fuel cost included in the per-km car
                        rate?</span>
                    <i
                        class="faq-icon fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-0 text-slate-600 text-sm leading-relaxed">
                        Yes, the per-kilometer rate covers vehicle running costs, chauffeur allowance, and fuel. Toll
                        taxes, state border permits, and parking fee entries are extra and calculated on actuals.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div
                class="faq-item bg-slate-50 rounded-[24px] border border-slate-200/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-btn w-full text-left p-6 flex items-center justify-between gap-4 font-semibold text-obsidian-950 focus:outline-none hover:bg-slate-100/60 transition-colors">
                    <span class="text-sm md:text-base font-bold font-display">What is the minimum billing limit per day
                        for outstation bookings?</span>
                    <i
                        class="faq-icon fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-0 text-slate-600 text-sm leading-relaxed">
                        For outstation journeys, there is a minimum running average criteria of 250 kilometers per
                        calendar day. In case the vehicle runs less than that, billing is still calculated for 250 km.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div
                class="faq-item bg-slate-50 rounded-[24px] border border-slate-200/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-btn w-full text-left p-6 flex items-center justify-between gap-4 font-semibold text-obsidian-950 focus:outline-none hover:bg-slate-100/60 transition-colors">
                    <span class="text-sm md:text-base font-bold font-display">Are there any extra charges for night
                        driving?</span>
                    <i
                        class="faq-icon fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-0 text-slate-600 text-sm leading-relaxed">
                        Yes, if the vehicle is driven between 10:00 PM and 5:00 AM, a night driver allowance (typically
                        ₹300 - ₹500 depending on the vehicle size) is charged to cover chauffeur overtime.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Lead Capture Inquiry Form -->
<?php require_once 'includes/cta.php'; ?>

<!-- Inline Javascript Helper to preselect Car Rental in CTA Form -->
<script>
    function selectCarService(serviceValue, title) {
        const selectElem = document.getElementById('cta-service');
        const requirementsElem = document.getElementById('cta-requirements');
        if (selectElem) {
            selectElem.value = serviceValue;
        }
        if (requirementsElem && title) {
            requirementsElem.value = `Hi, I am interested in renting the "${title}" cab. Please share details on vehicle availability and total estimates.`;
        }
    }
</script>

<?php
require_once 'includes/footer.php';
?>