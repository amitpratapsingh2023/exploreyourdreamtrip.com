<?php
$page_title = "Luxury Tempo Traveller Hire in Delhi – 12, 16, 20 Seater Rentals";
$page_desc = "Hire premium luxury 12-seater, 16-seater, and 20-seater Tempo Travellers in Delhi. AC, pushback seats, music system, and veteran chauffeurs for outstation tours. Best prices starting from ₹18/km.";
require_once 'includes/config.php';

// Custom breadcrumb for this page
$breadcrumb_custom = [
    ['title' => 'Tempo Traveller Rental', 'url' => '', 'active' => true],
];

require_once 'includes/header.php';
?>

<!-- Structured Data (JSON-LD) - Product/Service Schema for Tempo Travellers -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Luxury Tempo Traveller Rentals - Explore Your Dream Trip",
  "description": "Book premium 12, 16, and 20-seater luxury Tempo Travellers in Delhi and NCR for outstation family trips, pilgrimages, and corporate group transfers. Featuring pushback leather seats, individual AC vents, and professional drivers.",
  "image": [
    "<?php echo BASE_URL; ?>assets/images/fleet/tempo-12.png",
    "<?php echo BASE_URL; ?>assets/images/fleet/tempo-16.png",
    "<?php echo BASE_URL; ?>assets/images/fleet/tempo-20.png"
  ],
  "brand": {
    "@type": "Brand",
    "name": "<?php echo SITE_NAME; ?>"
  },
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "INR",
    "lowPrice": "18",
    "highPrice": "26",
    "offerCount": "3",
    "priceValuedOnlyTo": "per kilometer",
    "offers": [
      {
        "@type": "Offer",
        "name": "Luxury 12 Seater Tempo Traveller",
        "price": "18",
        "priceCurrency": "INR",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": "18",
          "priceCurrency": "INR",
          "unitText": "KM"
        }
      },
      {
        "@type": "Offer",
        "name": "Luxury 16 Seater Tempo Traveller",
        "price": "22",
        "priceCurrency": "INR",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": "22",
          "priceCurrency": "INR",
          "unitText": "KM"
        }
      },
      {
        "@type": "Offer",
        "name": "Luxury 20 Seater Tempo Traveller",
        "price": "26",
        "priceCurrency": "INR",
        "priceSpecification": {
          "@type": "UnitPriceSpecification",
          "price": "26",
          "priceCurrency": "INR",
          "unitText": "KM"
        }
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
      "name": "Tempo Traveller Rental",
      "item": "<?php echo BASE_URL; ?>tempo-traveller.php"
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
        <img src="<?php echo BASE_URL; ?>assets/images/fleet/tempo-12.png" alt="Luxury Tempo Traveller Fleet"
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
            <i class="fa-solid fa-crown text-[9px]"></i>
            <span>Executive Group Transportation</span>
        </span>

        <!-- Page Title -->
        <h1
            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight font-display tracking-tight max-w-4xl mx-auto">
            Luxury Tempo Traveller <br class="hidden sm:inline">
            <span class="text-gradient-gold">Rentals in Delhi & NCR</span>
        </h1>

        <p class="text-slate-300 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-medium">
            Explore India together in absolute comfort. Our premium executive tempo travellers feature plush pushback
            seats, individual climate controls, and high-end entertainment systems.
        </p>

        <!-- Trust Indicators inside Hero -->
        <div
            class="flex flex-wrap justify-center items-center gap-x-6 gap-y-3 pt-3 text-[10px] sm:text-[11px] font-bold text-slate-300 uppercase tracking-widest">
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-snowflake text-brand text-[9px]"></i>
                <span>Dual AC Climate Vents</span>
            </div>
            <div class="w-1.5 h-1.5 rounded-full bg-brand/40 hidden md:block"></div>
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-couch text-brand text-[9px]"></i>
                <span>Pushback Premium Seating</span>
            </div>
            <div class="w-1.5 h-1.5 rounded-full bg-brand/40 hidden md:block"></div>
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-user-shield text-brand text-[9px]"></i>
                <span>Experienced Verified Chauffeurs</span>
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
                    <i class="fa-solid fa-couch text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Pushback Luxury
                        Seats</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Reclining premium chairs with
                        high back support</p>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-fan text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Climate Control
                    </h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Powerful double blower
                        cooling with individual vents</p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-music text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Hi-Fi
                        Entertainment</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Smart LED TV, Bluetooth
                        music, and karaoke mic</p>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-suitcase-rolling text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Huge Boot Space
                    </h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Dedicated luggage carrier &
                        safe rear trunk space</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 3: LUXURY FLEET GRID
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-20 bg-slate-50 relative z-10" id="fleet-section">
    <div class="max-w-[1440px] mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Our
                Fleet Selection</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">Executive Fleet Lineup</h2>
            <p class="text-slate-600 text-sm md:text-base">We present our fleet of customized, neat, and highly
                maintained premium coaches. Book the perfect layout size for your group.</p>
        </div>

        <!-- Fleet Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            <?php foreach ($TEMPO_TRAVELLERS as $key => $fleet): ?>
                <div
                    class="group/card bg-white rounded-[32px] overflow-hidden flex flex-col justify-between border border-slate-100 shadow-sm hover:shadow-[0_20px_45px_rgba(15,23,42,0.06)] hover:border-brand/35 hover:-translate-y-2.5 transition-all duration-500">
                    <!-- Vehicle Image -->
                    <div class="relative overflow-hidden aspect-[16/10] bg-slate-100 z-0">
                        <img src="<?php echo BASE_URL . $fleet['image']; ?>" alt="<?php echo $fleet['title']; ?>"
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover/card:scale-105">

                        <!-- Soft luxury overlays -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-slate-950/10 to-transparent">
                        </div>
                        <div class="absolute top-4 left-4">
                            <span
                                class="text-slate-900 bg-white/95 backdrop-blur-md border border-slate-200/50 px-3.5 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider flex items-center space-x-1.5 shadow-sm">
                                <i class="fa-solid fa-crown text-brand-accent text-[9px]"></i>
                                <span>Executive Class</span>
                            </span>
                        </div>
                    </div>

                    <!-- Card Body & Info -->
                    <div class="p-6 md:p-8 space-y-6 flex-grow flex flex-col justify-between">
                        <div class="space-y-4">
                            <h3
                                class="text-xl font-bold font-display text-obsidian-950 transition-colors duration-300 group-hover/card:text-brand-accent leading-tight">
                                <?php echo $fleet['title']; ?>
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="text-[10px] text-brand-accent bg-brand/10 border border-brand/20 px-3 py-1 rounded-full font-bold uppercase tracking-wider flex items-center gap-1">
                                    <i class="fa-solid fa-users text-[9px]"></i> <?php echo $fleet['capacity']; ?>
                                </span>
                                <span
                                    class="text-[10px] text-slate-500 bg-slate-100 border border-slate-200/60 px-3 py-1 rounded-full font-semibold uppercase tracking-wider flex items-center gap-1">
                                    <i class="fa-solid fa-snowflake text-[9px]"></i> 100% AC
                                </span>
                            </div>
                        </div>

                        <!-- Amenities List -->
                        <ul class="space-y-2.5 text-xs font-medium text-slate-600 pt-2">
                            <?php foreach ($fleet['features'] as $feature): ?>
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
                                <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Estimated Rate</p>
                                <p class="text-xl font-black text-obsidian-950 font-display leading-none mt-1">
                                    <?php echo $fleet['price']; ?>
                                </p>
                            </div>

                            <a href="#inquiry"
                                onclick="selectService('tempo-traveller', '<?php echo addslashes($fleet['title']); ?>')"
                                class="relative group/btn overflow-hidden px-5 py-2.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md whitespace-nowrap inline-flex items-center justify-center transition-all duration-300">
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
                <span>Premium Comfort Standard</span>
            </span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                Designed for the <span class="text-gradient-gold font-display">Ultimate Journey</span>
            </h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Enjoy customized travel features on board our modified luxury coaches, standard across all rental
                bookings.
            </p>
        </div>

        <!-- Amenities Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Amenity 1 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-chair"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    Plush Reclining Chairs</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Individually adjustable pushback seats fitted with
                    premium leather upholstery and headrests for long highway comfort.</p>
            </div>

            <!-- Amenity 2 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-tv"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    LED TV & Sound System</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Watch movies or play songs on a high-definition screen
                    connected to surround-sound speakers with Bluetooth & USB support.</p>
            </div>

            <!-- Amenity 3 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-plug"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    Individual Charging Ports</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Each seating row has dedicated USB sockets or points
                    to keep your mobile phones, tablets, and laptops fully charged.</p>
            </div>

            <!-- Amenity 4 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-snowflake"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    Dual Cooling AC Engine</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Highly effective air-conditioning built with
                    roof-mounted vents for every passenger to ensure cool air even in harsh summer months.</p>
            </div>

            <!-- Amenity 5 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-suitcase"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    Spacious Luggage Carriers</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Equipped with internal overhead storage racks for hand
                    bags, and a separate, spacious rear boot for heavy suitcases.</p>
            </div>

            <!-- Amenity 6 -->
            <div
                class="group p-8 bg-slate-900/40 backdrop-blur-md rounded-[32px] border border-white/5 hover:border-brand/25 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_15px_35px_rgba(240,210,90,0.05)] space-y-5">
                <div
                    class="w-12 h-12 bg-white/5 text-brand rounded-2xl flex items-center justify-center text-xl border border-white/10 group-hover:bg-brand/10 group-hover:text-brand-light group-hover:border-brand/40 transition-all duration-300">
                    <i class="fa-solid fa-road-spikes"></i>
                </div>
                <h3
                    class="text-xl font-bold text-white font-display group-hover:text-brand transition-colors duration-300">
                    Soft Ride Air Suspension</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Engineered with high-end shocks and suspension layout
                    to absorb highway bumps, offering a smooth travel experience.</p>
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
                class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Perfect
                For Every Occasion</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">Ideal Trip Outings</h2>
            <p class="text-slate-600 text-sm md:text-base">Our custom luxury coaches are tailored for specific travel
                plans, ensuring maximum comfort for all group sizes.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Use Case 1 -->
            <div
                class="group bg-white rounded-[28px] border border-slate-100 p-6 shadow-sm hover:shadow-[0_15px_35px_rgba(15,23,42,0.05)] transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-base shadow-sm">
                        <i class="fa-solid fa-people-roof"></i>
                    </div>
                    <h3 class="text-lg font-bold font-display text-obsidian-950">Family Outstation Tours</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Perfect for long outstation vacations to
                        Agra-Jaipur golden triangle, or mountain getaways to Shimla and Manali together.</p>
                </div>
                <div
                    class="pt-4 border-t border-slate-100 mt-6 text-[10px] text-brand-accent font-bold uppercase tracking-wider flex items-center gap-1.5">
                    <span>Agra, Shimla, Manali</span>
                </div>
            </div>

            <!-- Use Case 2 -->
            <div
                class="group bg-white rounded-[28px] border border-slate-100 p-6 shadow-sm hover:shadow-[0_15px_35px_rgba(15,23,42,0.05)] transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-base shadow-sm">
                        <i class="fa-solid fa-gopuram"></i>
                    </div>
                    <h3 class="text-lg font-bold font-display text-obsidian-950">Spiritual Journeys</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Plan comfortable family pilgrimages (yatras) to
                        spiritual centers like Vrindavan, Mathura, Ayodhya, and Rishikesh.</p>
                </div>
                <div
                    class="pt-4 border-t border-slate-100 mt-6 text-[10px] text-brand-accent font-bold uppercase tracking-wider flex items-center gap-1.5">
                    <span>Ayodhya, Vrindavan, Rishikesh</span>
                </div>
            </div>

            <!-- Use Case 3 -->
            <div
                class="group bg-white rounded-[28px] border border-slate-100 p-6 shadow-sm hover:shadow-[0_15px_35px_rgba(15,23,42,0.05)] transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-base shadow-sm">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3 class="text-lg font-bold font-display text-obsidian-950">Corporate Outings</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Comfortable seating layouts, ideal for office
                        conferences, guest transportation, team-building outings, and events.</p>
                </div>
                <div
                    class="pt-4 border-t border-slate-100 mt-6 text-[10px] text-brand-accent font-bold uppercase tracking-wider flex items-center gap-1.5">
                    <span>Conferences & Outings</span>
                </div>
            </div>

            <!-- Use Case 4 -->
            <div
                class="group bg-white rounded-[28px] border border-slate-100 p-6 shadow-sm hover:shadow-[0_15px_35px_rgba(15,23,42,0.05)] transition-all duration-300 flex flex-col justify-between">
                <div class="space-y-4">
                    <div
                        class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand-accent text-base shadow-sm">
                        <i class="fa-solid fa-plane-arrival"></i>
                    </div>
                    <h3 class="text-lg font-bold font-display text-obsidian-950">Airport & Event Transfers</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Timely group pickups and drop-offs to Delhi IGI
                        Airport, luxury hotels, and wedding venues in premium comfort.</p>
                </div>
                <div
                    class="pt-4 border-t border-slate-100 mt-6 text-[10px] text-brand-accent font-bold uppercase tracking-wider flex items-center gap-1.5">
                    <span>IGI Airport & Hotel Pickups</span>
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
                class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Got
                Questions?</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-obsidian-950 leading-tight">Rental FAQs & Terms</h2>
            <p class="text-slate-600 text-sm md:text-base">Here are our transparent answers regarding rates, taxes,
                state entries, and booking guidelines.</p>
        </div>

        <div class="max-w-3xl mx-auto space-y-5">
            <!-- FAQ 1 -->
            <div
                class="faq-item bg-slate-50 rounded-[24px] border border-slate-200/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-btn w-full text-left p-6 flex items-center justify-between gap-4 font-semibold text-obsidian-950 focus:outline-none hover:bg-slate-100/60 transition-colors">
                    <span class="text-sm md:text-base font-bold font-display">Are toll taxes, parking fees, and state
                        border taxes included in the km rate?</span>
                    <i
                        class="faq-icon fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-0 text-slate-600 text-sm leading-relaxed">
                        No, the per-kilometer rate covers only the vehicle hire and fuel cost. Toll taxes, state border
                        entry permits (e.g., UP, Rajasthan, Haryana state taxes), and parking fees at monuments or
                        hotels are to be paid directly by the client based on actual receipts, or can be pre-quoted as a
                        fixed all-inclusive package.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div
                class="faq-item bg-slate-50 rounded-[24px] border border-slate-200/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-btn w-full text-left p-6 flex items-center justify-between gap-4 font-semibold text-obsidian-950 focus:outline-none hover:bg-slate-100/60 transition-colors">
                    <span class="text-sm md:text-base font-bold font-display">Is there a minimum daily kilometer limit
                        for outstation rentals?</span>
                    <i
                        class="faq-icon fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-0 text-slate-600 text-sm leading-relaxed">
                        Yes, for outstation tours outside Delhi NCR, there is a minimum running average of 250
                        kilometers per calendar day. If the vehicle runs less than 250 km on a particular day, billing
                        will still be calculated for 250 km.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div
                class="faq-item bg-slate-50 rounded-[24px] border border-slate-200/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-btn w-full text-left p-6 flex items-center justify-between gap-4 font-semibold text-obsidian-950 focus:outline-none hover:bg-slate-100/60 transition-colors">
                    <span class="text-sm md:text-base font-bold font-display">What are the driver allowance/charges for
                        outstation trips?</span>
                    <i
                        class="faq-icon fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-0 text-slate-600 text-sm leading-relaxed">
                        Driver allowance (usually ₹500 per day) covers the driver's meals and lodging. For night driving
                        between 10:00 PM and 5:00 AM, a night charge may be applicable. Driver allowances are detailed
                        transparently at the time of quotation.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div
                class="faq-item bg-slate-50 rounded-[24px] border border-slate-200/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-btn w-full text-left p-6 flex items-center justify-between gap-4 font-semibold text-obsidian-950 focus:outline-none hover:bg-slate-100/60 transition-colors">
                    <span class="text-sm md:text-base font-bold font-display">How do I confirm my booking and pay the
                        deposit?</span>
                    <i
                        class="faq-icon fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300 flex-shrink-0"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 pb-6 pt-0 text-slate-600 text-sm leading-relaxed">
                        You can secure your booking by paying a 20% token advance online via secure UPI, Net Banking, or
                        Credit/Debit Card. The remaining balance can be paid directly to the driver during the tour or
                        upon completion of the trip.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include CTA Lead Capture Inquiry Form -->
<?php require_once 'includes/cta.php'; ?>

<!-- Inline Javascript Helper to preselect Tempo Traveller in CTA Form -->
<script>
    function selectService(serviceValue, title) {
        const selectElem = document.getElementById('cta-service');
        const requirementsElem = document.getElementById('cta-requirements');
        if (selectElem) {
            selectElem.value = serviceValue;
        }
        if (requirementsElem && title) {
            requirementsElem.value = `Hi, I am interested in booking the "${title}" coach. Please share availability and customized rates.`;
        }
    }
</script>

<?php
require_once 'includes/footer.php';
?>