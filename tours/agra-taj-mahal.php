<?php
$page_title = "Agra (Taj Mahal) Tour – Premium Day Trip Package";
$page_desc = "Book our premium Agra Taj Mahal day trip from Delhi. Experience the iconic monument of love with private luxury transport, expert guide, Agra Fort, Mehtab Bagh, and more. Starting ₹1,999/person.";
require_once '../includes/config.php';

// ─── Tour Detail Data ─────────────────────────────────────────────────
$tour = $TOURS['agra-taj-mahal'];

$tour_detail = [
    'overview' => 'Experience the timeless grandeur of the Taj Mahal — one of the Seven Wonders of the World — on this meticulously curated premium day trip from Delhi. Our luxury Agra tour takes you on a journey through Mughal splendor, from the breathtaking ivory-white marble mausoleum to the imposing red sandstone Agra Fort and the serene Mehtab Bagh gardens. Travel in air-conditioned comfort with a professional chauffeur and licensed heritage guide, enjoying VIP skip-the-line entry and personalized attention throughout. Whether you\'re a solo traveler, a couple seeking romance, or a family creating lifelong memories — this tour is designed to deliver an unforgettable, hassle-free experience of India\'s most iconic landmark.',

    'highlights' => [
        'Sunrise/Sunset view of the Taj Mahal',
        'Skip-the-line VIP entry tickets',
        'Licensed English-speaking heritage guide',
        'Luxury AC sedan or SUV transport',
        'Visit Agra Fort (UNESCO World Heritage)',
        'Photo stop at Mehtab Bagh gardens',
    ],

    'key_facts' => [
        'duration' => '1 Day / 1 Night',
        'group_size' => '1–8 Persons',
        'best_season' => 'Oct – Mar (Winter)',
        'difficulty' => 'Easy (Walking Tour)',
        'pickup' => 'Delhi NCR (Hotel/Airport)',
        'languages' => 'English, Hindi',
    ],

    'itinerary' => [
        [
            'time' => '05:00 AM',
            'title' => 'Hotel Pickup & Departure from Delhi',
            'desc' => 'Our professional chauffeur picks you up from your Delhi NCR hotel or preferred location in a luxury air-conditioned sedan (Swift Dzire / Innova Crysta). Enjoy complimentary bottled water and a fresh newspaper as you settle in for the scenic 3-hour Yamuna Expressway drive to Agra.',
            'icon' => 'fa-solid fa-car-side',
        ],
        [
            'time' => '08:00 AM',
            'title' => 'Arrive at the Taj Mahal',
            'desc' => 'Arrive at the East Gate of the Taj Mahal. Your licensed heritage guide meets you with pre-arranged VIP skip-the-line entry tickets. Witness the awe-inspiring ivory marble masterpiece built by Emperor Shah Jahan as a testament of eternal love. Explore the intricate pietra dura inlay work, the perfectly symmetrical gardens, and the reflective pool — all while learning the fascinating history from your expert guide.',
            'icon' => 'fa-solid fa-mosque',
        ],
        [
            'time' => '10:30 AM',
            'title' => 'Explore Agra Fort (UNESCO Heritage)',
            'desc' => 'Drive to the magnificent Agra Fort, a sprawling 16th-century Mughal fortress of red sandstone. Walk through the Diwan-i-Am (Hall of Public Audience), the Diwan-i-Khas (Hall of Private Audience), the Sheesh Mahal (Mirror Palace), and the Musamman Burj — the octagonal tower where Shah Jahan spent his final days gazing at the Taj Mahal.',
            'icon' => 'fa-solid fa-fort-awesome',
        ],
        [
            'time' => '12:30 PM',
            'title' => 'Authentic Mughlai Lunch',
            'desc' => 'Enjoy a sumptuous lunch at a premium heritage restaurant in Agra. Savor authentic Mughlai cuisine — from tender kebabs and rich biryanis to creamy dal makhani and freshly baked naan. Vegetarian and Jain options are available upon request. (Lunch cost is at your own expense but we pre-arrange the finest options.)',
            'icon' => 'fa-solid fa-utensils',
        ],
        [
            'time' => '02:00 PM',
            'title' => 'Mehtab Bagh & Local Marble Crafts',
            'desc' => 'Visit Mehtab Bagh (Moonlight Garden) on the opposite bank of the Yamuna River for stunning panoramic views and perfect photo opportunities of the Taj Mahal. Optionally, explore a local marble inlay workshop to witness the same pietra dura artistry used in the Taj Mahal, and shop for authentic Agra marble souvenirs.',
            'icon' => 'fa-solid fa-camera',
        ],
        [
            'time' => '04:00 PM',
            'title' => 'Return Journey to Delhi',
            'desc' => 'Begin your comfortable return drive to Delhi on the Yamuna Expressway. Relax, reflect on the day\'s incredible experiences, and enjoy the sunset views along the way. Expected drop-off at your Delhi hotel by 7:30 PM.',
            'icon' => 'fa-solid fa-route',
        ],
    ],

    'inclusions' => [
        'Luxury AC sedan/SUV (Delhi ↔ Agra roundtrip)',
        'Professional chauffeur with verified background',
        'Licensed English-speaking heritage guide',
        'All highway tolls & parking charges',
        'Skip-the-line monument entry facilitation',
        'Complimentary water bottles & refreshments',
        'All applicable taxes (GST)',
        '24/7 on-call travel support',
    ],

    'exclusions' => [
        'Monument entry tickets (₹50 Indians / ₹1,100 Foreigners)',
        'Lunch and personal meals',
        'Camera/video permits at monuments',
        'Personal shopping & souvenirs',
        'Travel insurance',
        'Tips and gratuities',
    ],

    'gallery' => [
        ['src' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=800&q=80', 'title' => 'Taj Mahal — The Monument of Love'],
        ['src' => 'https://images.unsplash.com/photo-1585135497273-1a86d9d9e2e3?auto=format&fit=crop&w=800&q=80', 'title' => 'Taj Mahal Reflection Pool'],
        ['src' => 'https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=800&q=80', 'title' => 'Agra Fort — Red Sandstone Fortress'],
        ['src' => 'https://images.unsplash.com/photo-1515091943-9d5c0ad475af?auto=format&fit=crop&w=800&q=80', 'title' => 'Mehtab Bagh Panoramic View'],
        ['src' => 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=800&q=80', 'title' => 'Taj Mahal at Golden Hour'],
        ['src' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=800&q=80', 'title' => 'Heritage Architecture of Agra'],
    ],

    'pricing' => [
        [
            'vehicle' => 'Swift Dzire (Sedan)',
            'capacity' => '1–4 Guests',
            'price' => '₹1,999',
            'per' => 'per person',
            'icon' => 'fa-solid fa-car',
            'popular' => false,
        ],
        [
            'vehicle' => 'Toyota Innova Crysta (SUV)',
            'capacity' => '1–6 Guests',
            'price' => '₹2,499',
            'per' => 'per person',
            'icon' => 'fa-solid fa-truck-pickup',
            'popular' => true,
        ],
        [
            'vehicle' => 'Tempo Traveller (12-Seater)',
            'capacity' => '7–12 Guests',
            'price' => '₹1,499',
            'per' => 'per person',
            'icon' => 'fa-solid fa-van-shuttle',
            'popular' => false,
        ],
    ],
];

// Custom breadcrumb for this page
$breadcrumb_custom = [
    ['title' => 'Tours & Packages', 'url' => BASE_URL . 'tours.php', 'active' => false],
    ['title' => 'Agra (Taj Mahal) Tour', 'url' => '', 'active' => true],
];

require_once '../includes/header.php';
?>

<!-- TouristTrip JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristTrip",
  "name": "<?php echo htmlspecialchars($tour['title']); ?>",
  "description": "<?php echo htmlspecialchars($page_desc); ?>",
  "touristType": ["Leisure", "Cultural", "Heritage"],
  "offers": {
    "@type": "Offer",
    "price": "1999",
    "priceCurrency": "INR",
    "availability": "https://schema.org/InStock",
    "validFrom": "<?php echo date('Y-m-d'); ?>"
  },
  "provider": {
    "@type": "TravelAgency",
    "name": "<?php echo SITE_NAME; ?>",
    "url": "<?php echo BASE_URL; ?>",
    "telephone": "<?php echo CONTACT_PHONE; ?>"
  },
  "itinerary": {
    "@type": "ItemList",
    "numberOfItems": <?php echo count($tour_detail['itinerary']); ?>,
    "itemListElement": [
      <?php foreach ($tour_detail['itinerary'] as $idx => $step): ?>
                      {
                        "@type": "ListItem",
                        "position": <?php echo $idx + 1; ?>,
                        "name": "<?php echo htmlspecialchars($step['title']); ?>"
                      }<?php echo $idx < count($tour_detail['itinerary']) - 1 ? ',' : ''; ?>
      <?php endforeach; ?>
    ]
  },
  "image": "<?php echo $tour_detail['gallery'][0]['src']; ?>",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php echo $tour['rating']; ?>",
    "reviewCount": "<?php echo $tour['reviews']; ?>"
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
      "name": "Tours & Packages",
      "item": "<?php echo BASE_URL; ?>tours.php"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Agra (Taj Mahal) Tour",
      "item": "<?php echo BASE_URL . $tour['link']; ?>"
    }
  ]
}
</script>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 1: PREMIUM HERO
     ═══════════════════════════════════════════════════════════════════════ -->
<section
    class="relative min-h-[60vh] md:min-h-[65vh] flex items-end bg-obsidian-950 overflow-hidden pt-36 pb-16 md:pb-20">
    <!-- Background Image with vignette and gradient overlays -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo BASE_URL . $tour['image']; ?>" alt="<?php echo $tour['title']; ?>"
            class="w-full h-full object-cover object-center opacity-30 scale-105 transition-transform duration-1000">
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

    <!-- Content -->
    <div class="max-w-[1440px] mx-auto px-4 z-10 w-full space-y-7 text-center">
        <!-- Breadcrumb -->
        <div class="flex justify-center">
            <?php require '../includes/breadcrumb.php'; ?>
        </div>

        <!-- Subtitle Badge with glow -->
        <span
            class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-brand/10 border border-brand/25 text-brand text-[11px] font-extrabold uppercase tracking-[0.18em] shadow-[0_2px_20px_rgba(240,210,90,0.15)] animate-pulse">
            <i class="fa-solid fa-gem text-[9px]"></i>
            <span><?php echo htmlspecialchars($tour['subtitle']); ?></span>
        </span>

        <!-- Dynamic contrast Title -->
        <h1
            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight font-display tracking-tight max-w-4xl mx-auto">
            <?php
            // Split the title at the dash or parenthesis to style it beautifully
            $title_parts = explode('–', $tour['title']);
            if (count($title_parts) > 1) {
                echo htmlspecialchars(trim($title_parts[0])) . '<span class="text-gradient-gold block mt-2 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold uppercase tracking-wide">' . htmlspecialchars(trim($title_parts[1])) . '</span>';
            } else {
                echo htmlspecialchars($tour['title']);
            }
            ?>
        </h1>

        <p class="text-slate-300 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-medium">
            <?php echo htmlspecialchars($page_desc); ?>
        </p>

        <!-- Elegant Trust indicators inside Hero -->
        <div
            class="flex flex-wrap justify-center items-center gap-x-6 gap-y-3 pt-3 text-[11px] font-bold text-slate-300 uppercase tracking-widest">
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-star text-brand text-[9px]"></i>
                <span><?php echo $tour['rating']; ?>/5 (<?php echo $tour['reviews']; ?> Reviews)</span>
            </div>
            <div class="w-1.5 h-1.5 rounded-full bg-brand/40 hidden md:block"></div>
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-shield-halved text-brand text-[9px]"></i>
                <span>100% Private Luxury Tour</span>
            </div>
            <div class="w-1.5 h-1.5 rounded-full bg-brand/40 hidden md:block"></div>
            <div class="flex items-center space-x-2 bg-white/5 border border-white/10 px-3 py-1.5 rounded-full">
                <i class="fa-solid fa-bolt text-brand text-[9px]"></i>
                <span>VIP Skip-The-Line</span>
            </div>
        </div>

    </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 1.5: LUXURY TRUST STRIP (Value Propositions)
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="relative z-20 -mt-10 px-4 max-w-[1440px] mx-auto">
    <div class="glass-nav rounded-[28px] border border-brand/20 p-6 md:p-8 shadow-2xl glow-gold">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-6 sm:gap-y-8 lg:gap-y-0 lg:divide-x lg:divide-white/10">
            <!-- Prop 1 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-car-side text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Private Luxury
                        Car</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">AC Sedan/SUV with
                        professional driver</p>
                </div>
            </div>
            <!-- Prop 2 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-award text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">Heritage
                        Specialist</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Licensed government-approved
                        guides</p>
                </div>
            </div>
            <!-- Prop 3 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-sliders text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">100%
                        Customisable</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">Bespoke timings & flexible
                        itinerary</p>
                </div>
            </div>
            <!-- Prop 4 -->
            <div class="px-2 sm:px-4 lg:px-6 flex items-center space-x-4">
                <div
                    class="w-11 h-11 rounded-2xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand flex-shrink-0 shadow-[0_4px_15px_rgba(240,210,90,0.1)]">
                    <i class="fa-solid fa-passport text-base"></i>
                </div>
                <div>
                    <h4 class="text-white text-xs font-extrabold uppercase tracking-wider font-display">VIP
                        Skip-The-Line</h4>
                    <p class="text-slate-400 text-[11px] mt-0.5 font-medium leading-tight">All monument passes
                        pre-arranged</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 2: PREMIUM TABBED TOUR DETAILS
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-12 md:py-20 bg-slate-50 relative z-10" id="tour-details">
    <div class="max-w-[1440px] mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14">

            <!-- ═══════════════════════════════════════════════════════════════
                 LEFT COLUMN: PREMIUM TABS
                 ═══════════════════════════════════════════════════════════════ -->
            <div class="lg:col-span-7 xl:col-span-8">

                <!-- ── Tab Navigation Bar ── -->
                <div class="premium-tabs-wrapper mb-8 md:mb-10">
                    <nav class="premium-tabs-nav" id="tourTabsNav" role="tablist" aria-label="Tour Details Tabs">
                        <button class="premium-tab active" data-tab="overview" role="tab" aria-selected="true"
                            aria-controls="panel-overview" id="tab-overview">
                            <i class="fa-solid fa-binoculars"></i>
                            <span>Overview</span>
                        </button>
                        <button class="premium-tab" data-tab="itinerary" role="tab" aria-selected="false"
                            aria-controls="panel-itinerary" id="tab-itinerary">
                            <i class="fa-solid fa-route"></i>
                            <span>Itinerary</span>
                        </button>
                        <button class="premium-tab" data-tab="inclusions" role="tab" aria-selected="false"
                            aria-controls="panel-inclusions" id="tab-inclusions">
                            <i class="fa-solid fa-list-check"></i>
                            <span>Inclusions / Exclusions</span>
                        </button>
                        <button class="premium-tab" data-tab="gallery" role="tab" aria-selected="false"
                            aria-controls="panel-gallery" id="tab-gallery">
                            <i class="fa-solid fa-images"></i>
                            <span>Gallery</span>
                        </button>
                        <button class="premium-tab" data-tab="pricing" role="tab" aria-selected="false"
                            aria-controls="panel-pricing" id="tab-pricing">
                            <i class="fa-solid fa-tags"></i>
                            <span>Pricing</span>
                        </button>
                        <!-- Animated active indicator -->
                        <div class="premium-tab-indicator" id="tabIndicator"></div>
                    </nav>
                </div>

                <!-- ── Tab Panels ── -->
                <div class="premium-tab-panels" id="tourTabPanels">

                    <!-- ╌╌╌╌╌╌╌╌╌ OVERVIEW PANEL ╌╌╌╌╌╌╌╌╌ -->
                    <div class="premium-tab-panel active" id="panel-overview" role="tabpanel"
                        aria-labelledby="tab-overview">
                        <div class="space-y-8">
                            <div class="space-y-3">
                                <span
                                    class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Tour
                                    Overview</span>
                                <h2
                                    class="text-2xl md:text-4xl font-extrabold text-obsidian-950 leading-tight font-display">
                                    Discover the Eternal <span class="text-gradient-gold">Mughal Grandeur</span>
                                </h2>
                            </div>
                            <p
                                class="text-slate-700 text-base leading-relaxed border-l-2 border-brand-accent/50 pl-4 py-1 font-medium">
                                <?php echo $tour_detail['overview']; ?>
                            </p>

                            <!-- Highlights Grid -->
                            <div class="space-y-4">
                                <h3 class="text-sm font-bold text-obsidian-950 uppercase tracking-wider">Tour Highlights
                                </h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                    <?php foreach ($tour_detail['highlights'] as $highlight): ?>
                                        <div
                                            class="flex items-center space-x-3.5 bg-white rounded-[20px] px-5 py-4 border border-slate-100 shadow-[0_4px_20px_rgba(15,23,42,0.02)] border-luxury-gold transition-all duration-300">
                                            <span
                                                class="w-8 h-8 rounded-xl bg-gradient-gold flex items-center justify-center text-obsidian-950 text-xs flex-shrink-0 shadow-[0_2px_8px_rgba(240,210,90,0.2)]">
                                                <i class="fa-solid fa-check font-black"></i>
                                            </span>
                                            <span
                                                class="text-sm text-slate-800 font-semibold tracking-wide"><?php echo $highlight; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Key Facts Mini Grid (visible in tab) -->
                            <div class="space-y-4 pt-6 border-t border-slate-200">
                                <h3 class="text-sm font-bold text-obsidian-950 uppercase tracking-wider">Quick Facts
                                </h3>
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3.5">
                                    <?php
                                    $fact_icons = [
                                        'duration' => 'fa-regular fa-clock',
                                        'group_size' => 'fa-solid fa-users',
                                        'best_season' => 'fa-solid fa-sun',
                                        'difficulty' => 'fa-solid fa-person-hiking',
                                        'pickup' => 'fa-solid fa-location-dot',
                                        'languages' => 'fa-solid fa-language',
                                    ];
                                    $fact_labels = [
                                        'duration' => 'Duration',
                                        'group_size' => 'Group Size',
                                        'best_season' => 'Best Season',
                                        'difficulty' => 'Difficulty',
                                        'pickup' => 'Pickup Point',
                                        'languages' => 'Languages',
                                    ];
                                    foreach ($tour_detail['key_facts'] as $key => $value): ?>
                                        <div
                                            class="bg-white rounded-[22px] border border-slate-100 px-4 py-4 shadow-[0_4px_20px_rgba(15,23,42,0.02)] border-luxury-gold transition-all duration-300">
                                            <div class="flex items-center space-x-2.5 mb-2">
                                                <span
                                                    class="w-8 h-8 rounded-xl bg-brand/8 border border-brand/15 flex items-center justify-center text-brand-accent text-xs shadow-sm">
                                                    <i class="<?php echo $fact_icons[$key]; ?>"></i>
                                                </span>
                                                <span
                                                    class="text-[10px] text-slate-400 font-extrabold uppercase tracking-widest"><?php echo $fact_labels[$key]; ?></span>
                                            </div>
                                            <p class="text-sm text-obsidian-950 font-bold pl-1"><?php echo $value; ?>
                                            </p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ╌╌╌╌╌╌╌╌╌ ITINERARY PANEL ╌╌╌╌╌╌╌╌╌ -->
                    <div class="premium-tab-panel" id="panel-itinerary" role="tabpanel" aria-labelledby="tab-itinerary">
                        <div class="space-y-6">
                            <div class="space-y-3">
                                <span
                                    class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Your
                                    Journey</span>
                                <h2
                                    class="text-2xl md:text-4xl font-extrabold text-obsidian-950 leading-tight font-display">
                                    Day-by-Day <span class="text-gradient-gold">Itinerary</span>
                                </h2>
                                <p class="text-slate-500 text-sm md:text-base leading-relaxed">A carefully curated
                                    timeline of your Agra adventure, from dawn departure to evening return.</p>
                            </div>

                            <!-- Timeline -->
                            <div class="relative">
                                <!-- Vertical Line -->
                                <div
                                    class="absolute left-6 md:left-8 top-0 bottom-0 w-[2px] bg-gradient-to-b from-brand-dark/60 via-brand/20 to-transparent hidden sm:block">
                                </div>

                                <div class="space-y-5">
                                    <?php foreach ($tour_detail['itinerary'] as $idx => $step): ?>
                                        <div class="faq-item relative flex items-start gap-5 sm:gap-8 group/step">
                                            <!-- Timeline Dot -->
                                            <div class="hidden sm:flex flex-col items-center flex-shrink-0 z-10">
                                                <div
                                                    class="w-13 h-13 md:w-15 md:h-15 rounded-2xl bg-white border border-slate-100 group-hover/step:border-brand/40 shadow-[0_4px_15px_rgba(15,23,42,0.03)] group-hover/step:shadow-[0_4px_20px_rgba(240,210,90,0.18)] flex items-center justify-center text-brand text-base transition-all duration-300">
                                                    <i class="<?php echo $step['icon']; ?>"></i>
                                                </div>
                                            </div>
                                            <!-- Card -->
                                            <div
                                                class="flex-grow bg-white rounded-[24px] border border-slate-100 overflow-hidden shadow-[0_4px_25px_rgba(15,23,42,0.02)] border-luxury-gold transition-all duration-300 group-hover/step:-translate-y-0.5">
                                                <button
                                                    class="faq-btn w-full text-left p-5 md:p-7 flex items-center justify-between gap-4 focus:outline-none">
                                                    <div class="flex items-center gap-3 sm:gap-4">
                                                        <div
                                                            class="sm:hidden w-10 h-10 rounded-xl bg-brand/10 border border-brand/20 flex items-center justify-center text-brand text-sm flex-shrink-0">
                                                            <i class="<?php echo $step['icon']; ?>"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-[10px] text-brand font-extrabold uppercase tracking-widest"><?php echo $step['time']; ?></span>
                                                            <h3
                                                                class="text-base md:text-lg font-bold text-obsidian-950 font-display mt-0.5 leading-snug">
                                                                <?php echo $step['title']; ?>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <i
                                                        class="faq-icon fa-solid fa-chevron-down text-xs text-slate-400 transition-transform duration-300 flex-shrink-0"></i>
                                                </button>
                                                <div class="accordion-content">
                                                    <div class="px-5 md:px-7 pb-6 md:pb-7 pt-0">
                                                        <p class="text-slate-600 text-sm leading-relaxed">
                                                            <?php echo $step['desc']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ╌╌╌╌╌╌╌╌╌ INCLUSIONS / EXCLUSIONS PANEL ╌╌╌╌╌╌╌╌╌ -->
                    <div class="premium-tab-panel" id="panel-inclusions" role="tabpanel"
                        aria-labelledby="tab-inclusions">
                        <div class="space-y-6">
                            <div class="space-y-3">
                                <span
                                    class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">What's
                                    Covered</span>
                                <h2
                                    class="text-2xl md:text-4xl font-extrabold text-obsidian-950 leading-tight font-display">
                                    Inclusions & <span class="text-gradient-gold">Exclusions</span>
                                </h2>
                                <p class="text-slate-500 text-sm md:text-base leading-relaxed">Full transparency —
                                    here's exactly what's included in your tour package and what's not.</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Inclusions -->
                                <div
                                    class="bg-white rounded-[28px] border border-emerald-100/70 p-6 md:p-8 space-y-6 hover:shadow-[0_15px_35px_rgba(16,185,129,0.04)] border-luxury-gold transition-all duration-300">
                                    <div class="flex items-center space-x-3.5 pb-4 border-b border-slate-100">
                                        <div
                                            class="w-11 h-11 rounded-2xl bg-emerald-50 border border-emerald-100 text-emerald-600 flex items-center justify-center text-base shadow-sm">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </div>
                                        <h3 class="text-lg font-extrabold font-display text-obsidian-950">Luxury
                                            Inclusions</h3>
                                    </div>
                                    <ul class="space-y-3.5">
                                        <?php foreach ($tour_detail['inclusions'] as $item): ?>
                                            <li class="flex items-start space-x-3.5">
                                                <span
                                                    class="w-5 h-5 rounded-full bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 text-[9px] flex-shrink-0 mt-0.5 shadow-sm">
                                                    <i class="fa-solid fa-check"></i>
                                                </span>
                                                <span
                                                    class="text-slate-700 text-sm font-medium leading-relaxed"><?php echo $item; ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Exclusions -->
                                <div
                                    class="bg-white rounded-[28px] border border-slate-100 p-6 md:p-8 space-y-6 hover:shadow-[0_15px_35px_rgba(244,63,94,0.02)] hover:border-rose-200/60 transition-all duration-300">
                                    <div class="flex items-center space-x-3.5 pb-4 border-b border-slate-100">
                                        <div
                                            class="w-11 h-11 rounded-2xl bg-rose-50 border border-rose-100 text-rose-500 flex items-center justify-center text-base shadow-sm">
                                            <i class="fa-solid fa-circle-xmark"></i>
                                        </div>
                                        <h3 class="text-lg font-extrabold font-display text-obsidian-950">Exclusions
                                        </h3>
                                    </div>
                                    <ul class="space-y-3.5">
                                        <?php foreach ($tour_detail['exclusions'] as $item): ?>
                                            <li class="flex items-start space-x-3.5">
                                                <span
                                                    class="w-5 h-5 rounded-full bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-500 text-[9px] flex-shrink-0 mt-0.5 shadow-sm">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </span>
                                                <span
                                                    class="text-slate-600 text-sm font-medium leading-relaxed"><?php echo $item; ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ╌╌╌╌╌╌╌╌╌ GALLERY PANEL ╌╌╌╌╌╌╌╌╌ -->
                    <div class="premium-tab-panel" id="panel-gallery" role="tabpanel" aria-labelledby="tab-gallery">
                        <div class="space-y-6">
                            <div class="space-y-3">
                                <span
                                    class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Visual
                                    Journey</span>
                                <h2
                                    class="text-2xl md:text-4xl font-extrabold text-obsidian-950 leading-tight font-display">
                                    Tour <span class="text-gradient-gold">Gallery</span>
                                </h2>
                                <p class="text-slate-500 text-sm md:text-base leading-relaxed">Glimpse into the beauty
                                    and grandeur awaiting you on this journey.</p>
                            </div>

                            <!-- Gallery Grid -->
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-5">
                                <?php foreach ($tour_detail['gallery'] as $idx => $img): ?>
                                    <div data-gallery-item data-index="<?php echo $idx; ?>"
                                        data-src="<?php echo $img['src']; ?>"
                                        data-title="<?php echo htmlspecialchars($img['title']); ?>"
                                        class="group relative overflow-hidden rounded-[20px] md:rounded-[24px] cursor-pointer border border-slate-100 shadow-sm border-luxury-gold transition-all duration-500 <?php echo $idx === 0 ? 'md:col-span-2 md:row-span-2 aspect-[4/3]' : 'aspect-[4/3]'; ?>">
                                        <img src="<?php echo $img['src']; ?>"
                                            alt="<?php echo htmlspecialchars($img['title']); ?>"
                                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                            loading="lazy">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        </div>
                                        <div
                                            class="absolute bottom-0 left-0 right-0 p-4 md:p-5 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                            <p class="text-white text-xs md:text-sm font-bold tracking-wide">
                                                <?php echo htmlspecialchars($img['title']); ?></p>
                                        </div>
                                        <div
                                            class="absolute top-4 right-4 w-10 h-10 bg-slate-950/70 backdrop-blur-md border border-white/10 rounded-full flex items-center justify-center text-brand text-xs opacity-0 group-hover:opacity-100 transition-all duration-300 shadow-md">
                                            <i class="fa-solid fa-expand"></i>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- ╌╌╌╌╌╌╌╌╌ PRICING PANEL ╌╌╌╌╌╌╌╌╌ -->
                    <div class="premium-tab-panel" id="panel-pricing" role="tabpanel" aria-labelledby="tab-pricing">
                        <div class="space-y-6">
                            <div class="space-y-3">
                                <span
                                    class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3 py-1.5 rounded-full border border-brand/15">Transparent
                                    Pricing</span>
                                <h2
                                    class="text-2xl md:text-4xl font-extrabold text-obsidian-950 leading-tight font-display">
                                    Choose Your <span class="text-gradient-gold">Vehicle</span>
                                </h2>
                                <p class="text-slate-500 text-sm md:text-base leading-relaxed">Select the vehicle that
                                    best suits your group. All options include the same premium itinerary and services.
                                </p>
                            </div>

                            <!-- Pricing Cards -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                <?php foreach ($tour_detail['pricing'] as $plan): ?>
                                    <div
                                        class="group relative bg-white rounded-[28px] border <?php echo $plan['popular'] ? 'border-brand/40 shadow-xl shadow-brand/5 border-luxury-gold' : 'border-slate-100 shadow-sm border-luxury-gold'; ?> overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-[0_25px_50px_rgba(15,23,42,0.08)] flex flex-col">
                                        <?php if ($plan['popular']): ?>
                                            <div
                                                class="bg-gradient-gold text-obsidian-950 text-center py-2 text-[10px] uppercase tracking-widest font-extrabold shadow-sm">
                                                <i class="fa-solid fa-crown mr-1"></i> Most Popular Choice
                                            </div>
                                        <?php endif; ?>

                                        <div class="p-6 md:p-7 space-y-5 flex-grow flex flex-col">
                                            <div class="space-y-3">
                                                <div
                                                    class="w-12 h-12 rounded-2xl <?php echo $plan['popular'] ? 'bg-brand/10 border-brand/25 text-brand shadow-sm' : 'bg-slate-50 border-slate-100 text-brand-accent'; ?> border flex items-center justify-center text-lg group-hover:scale-110 transition-transform duration-300">
                                                    <i class="<?php echo $plan['icon']; ?>"></i>
                                                </div>
                                                <div>
                                                    <h3
                                                        class="text-base font-bold text-obsidian-950 font-display leading-tight">
                                                        <?php echo $plan['vehicle']; ?></h3>
                                                    <p
                                                        class="text-xs text-slate-400 mt-1 font-semibold uppercase tracking-wider">
                                                        <?php echo $plan['capacity']; ?></p>
                                                </div>
                                            </div>

                                            <div class="pt-4 border-t border-slate-100">
                                                <p class="text-2xl font-black text-obsidian-950 font-display">
                                                    <?php echo $plan['price']; ?></p>
                                                <p class="text-xs text-slate-400 font-semibold mt-1">
                                                    <?php echo $plan['per']; ?></p>
                                            </div>

                                            <ul class="space-y-2.5 text-sm text-slate-600 flex-grow pt-2">
                                                <li class="flex items-center space-x-2"><span
                                                        class="text-brand text-[10px]"><i
                                                            class="fa-solid fa-check"></i></span> <span>Roundtrip Delhi ↔
                                                        Agra</span></li>
                                                <li class="flex items-center space-x-2"><span
                                                        class="text-brand text-[10px]"><i
                                                            class="fa-solid fa-check"></i></span> <span>Professional
                                                        chauffeur</span></li>
                                                <li class="flex items-center space-x-2"><span
                                                        class="text-brand text-[10px]"><i
                                                            class="fa-solid fa-check"></i></span> <span>Heritage guide
                                                        included</span></li>
                                                <li class="flex items-center space-x-2"><span
                                                        class="text-brand text-[10px]"><i
                                                            class="fa-solid fa-check"></i></span> <span>All tolls &
                                                        parking</span></li>
                                            </ul>

                                            <a href="#inquiry"
                                                class="mt-auto w-full py-4 <?php echo $plan['popular'] ? 'bg-gradient-gold text-obsidian-950 pulse-gold-btn btn-shimmer' : 'bg-slate-950 text-white hover:bg-slate-800'; ?> rounded-full text-xs uppercase tracking-wider font-extrabold shadow-md transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center">
                                                Enquire Now <i class="fa-solid fa-arrow-right ml-2 text-[10px]"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <p class="text-xs text-slate-400 mt-6 leading-relaxed">
                                * Prices are indicative and may vary based on travel dates, group size, and specific
                                requirements. Contact us for an exact personalized quote.
                            </p>
                        </div>
                    </div>

                </div><!-- /tab-panels -->
            </div><!-- /left column -->

            <!-- ═══════════════════════════════════════════════════════════════
                 RIGHT COLUMN: STICKY BOOKING SIDEBAR
                 ═══════════════════════════════════════════════════════════════ -->
            <div class="lg:col-span-5 xl:col-span-4">
                <div
                    class="bg-white rounded-[32px] border border-slate-100 shadow-[0_20px_50px_rgba(15,23,42,0.04)] border-luxury-gold overflow-hidden sticky top-28">
                    <!-- Card Header -->
                    <div class="bg-obsidian-950 p-6 md:p-8 border-b border-brand/15">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-slate-400 uppercase tracking-widest font-extrabold">Starting
                                    From</p>
                                <p class="text-3xl font-black text-white font-display mt-1.5">
                                    <?php echo $tour['price']; ?> <span class="text-xs text-slate-400 font-normal">/
                                        person</span>
                                </p>
                            </div>
                            <div
                                class="flex items-center space-x-1.5 bg-white/10 border border-white/15 px-3.5 py-2 rounded-full shadow-sm">
                                <i class="fa-solid fa-star text-brand text-xs"></i>
                                <span class="text-white text-xs font-extrabold"><?php echo $tour['rating']; ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Key Facts -->
                    <div class="p-6 md:p-8 space-y-6">
                        <?php foreach ($tour_detail['key_facts'] as $key => $value): ?>
                            <div class="flex items-center justify-between py-3.5 border-b border-slate-100 last:border-0">
                                <div class="flex items-center space-x-3.5">
                                    <span
                                        class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-accent text-sm shadow-sm">
                                        <i class="<?php echo $fact_icons[$key]; ?>"></i>
                                    </span>
                                    <span
                                        class="text-[10px] text-slate-400 font-extrabold uppercase tracking-widest"><?php echo $fact_labels[$key]; ?></span>
                                </div>
                                <span class="text-sm text-obsidian-950 font-bold"><?php echo $value; ?></span>
                            </div>
                        <?php endforeach; ?>

                        <!-- Premium Booking Actions -->
                        <div class="space-y-3.5 pt-2">
                            <a href="#inquiry"
                                class="w-full py-4 bg-gradient-gold text-obsidian-950 font-bold rounded-full shadow-lg hover:shadow-brand/25 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 pulse-gold-btn btn-shimmer uppercase tracking-wider text-xs flex items-center justify-center">
                                <i class="fa-solid fa-arrow-right mr-2"></i> Book This Tour
                            </a>
                            <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
                                class="w-full py-4 bg-slate-950 text-white font-bold rounded-full border border-slate-900 hover:bg-slate-800 transition-all duration-300 text-xs uppercase tracking-wider flex items-center justify-center">
                                <i class="fa-solid fa-phone text-brand mr-2"></i> Speak to Expert
                            </a>
                        </div>

                        <!-- Premium Seals of Trust -->
                        <div class="pt-4 border-t border-slate-100 space-y-2.5">
                            <div
                                class="flex items-center text-[10px] font-bold text-slate-500 uppercase tracking-widest">
                                <span
                                    class="w-4 h-4 rounded-full bg-brand/10 flex items-center justify-center text-brand text-[8px] mr-2"><i
                                        class="fa-solid fa-check"></i></span>
                                Instant Confirmation
                            </div>
                            <div
                                class="flex items-center text-[10px] font-bold text-slate-500 uppercase tracking-widest">
                                <span
                                    class="w-4 h-4 rounded-full bg-brand/10 flex items-center justify-center text-brand text-[8px] mr-2"><i
                                        class="fa-solid fa-check"></i></span>
                                Free Cancellation (24h Notice)
                            </div>
                            <div
                                class="flex items-center text-[10px] font-bold text-slate-500 uppercase tracking-widest">
                                <span
                                    class="w-4 h-4 rounded-full bg-brand/10 flex items-center justify-center text-brand text-[8px] mr-2"><i
                                        class="fa-solid fa-check"></i></span>
                                Secure & Protected Payment
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Gallery Lightbox Modal (reuses main.js initGalleryLightbox) -->
<div id="gallery-lightbox"
    class="fixed inset-0 bg-obsidian-950/95 backdrop-blur-xl z-[200] hidden opacity-0 items-center justify-center transition-opacity duration-300 p-4">
    <!-- Close -->
    <button id="lightbox-close"
        class="absolute top-5 right-5 w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-white flex items-center justify-center transition-all duration-300 z-10">
        <i class="fa-solid fa-xmark text-lg"></i>
    </button>
    <!-- Counter -->
    <div id="lightbox-counter"
        class="absolute top-6 left-6 text-white/50 text-xs font-bold uppercase tracking-wider z-10">1 / 6</div>
    <!-- Prev -->
    <button id="lightbox-prev"
        class="absolute left-3 md:left-6 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-white flex items-center justify-center transition-all duration-300 z-10">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <!-- Next -->
    <button id="lightbox-next"
        class="absolute right-3 md:right-6 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-white flex items-center justify-center transition-all duration-300 z-10">
        <i class="fa-solid fa-chevron-right"></i>
    </button>
    <!-- Image -->
    <img id="lightbox-img" src="" alt=""
        class="max-h-[80vh] max-w-[90vw] md:max-w-[80vw] rounded-2xl shadow-2xl object-contain transition-all duration-300">
    <!-- Caption -->
    <p id="lightbox-caption"
        class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white text-sm font-semibold bg-obsidian-950/70 backdrop-blur-md px-5 py-2.5 rounded-full border border-white/10">
    </p>
</div>

<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 7: RELATED TOURS
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="py-16 md:py-24 bg-slate-50 relative z-10">
    <div class="max-w-[1440px] mx-auto px-4">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
            <span
                class="text-brand-accent font-bold text-xs uppercase tracking-widest bg-brand/10 px-3.5 py-2 rounded-full border border-brand/15">Curated
                Recommendations</span>
            <h2 class="text-2xl md:text-4xl font-extrabold text-obsidian-950 leading-tight font-display">
                You May Also <span class="text-gradient-gold">Love</span>
            </h2>
            <div class="w-12 h-1 bg-gradient-gold mx-auto rounded-full mt-2"></div>
        </div>

        <!-- Related Tours Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            <?php
            $count = 0;
            foreach ($TOURS as $key => $related_tour):
                if ($key === 'agra-taj-mahal')
                    continue; // skip current tour
                if ($count >= 3)
                    break;
                $count++;
                ?>
                <div
                    class="group bg-white rounded-[32px] overflow-hidden border border-slate-100 border-luxury-gold flex flex-col justify-between transition-all duration-300 hover:-translate-y-2.5 hover:shadow-[0_25px_50px_rgba(15,23,42,0.06)]">
                    <!-- Image -->
                    <div class="relative overflow-hidden aspect-[16/11] z-0">
                        <img src="<?php echo $related_tour['image']; ?>" alt="<?php echo $related_tour['title']; ?>"
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                            loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                        <!-- Badges -->
                        <div class="absolute top-5 left-5 right-5 flex justify-between items-center pointer-events-none">
                            <div
                                class="bg-slate-950/70 backdrop-blur-md border border-white/10 px-3.5 py-1.5 rounded-full text-white text-[11px] font-extrabold flex items-center space-x-1.5">
                                <i class="fa-solid fa-star text-brand"></i>
                                <span><?php echo $related_tour['rating']; ?></span>
                                <span class="text-slate-400 font-normal">(<?php echo $related_tour['reviews']; ?>)</span>
                            </div>
                            <?php if (isset($related_tour['featured']) && $related_tour['featured']): ?>
                                <span
                                    class="bg-gradient-gold text-obsidian-950 text-[9px] uppercase tracking-widest font-extrabold px-3 py-1 rounded-full shadow-md">Featured</span>
                            <?php endif; ?>
                        </div>
                        <!-- Bottom Title -->
                        <div class="absolute bottom-5 left-6 right-6">
                            <span
                                class="text-brand-light text-[10px] font-extrabold uppercase tracking-widest"><?php echo $related_tour['subtitle']; ?></span>
                            <h3 class="text-white text-xl font-bold font-display mt-1 leading-tight tracking-tight">
                                <?php echo $related_tour['title']; ?>
                            </h3>
                        </div>
                    </div>
                    <!-- Body -->
                    <div class="p-6 md:p-7 flex-grow flex flex-col justify-between space-y-6">
                        <div class="grid grid-cols-2 gap-4 text-xs font-semibold text-slate-700">
                            <div class="flex items-center space-x-3">
                                <span
                                    class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-accent text-sm shadow-sm">
                                    <i class="fa-regular fa-clock"></i>
                                </span>
                                <div>
                                    <p class="text-[9px] text-slate-400 uppercase tracking-widest font-bold">Duration</p>
                                    <p class="text-slate-800 text-[11px] font-bold mt-0.5">
                                        <?php echo $related_tour['duration']; ?></p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span
                                    class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-accent text-sm shadow-sm">
                                    <i class="fa-solid fa-route"></i>
                                </span>
                                <div>
                                    <p class="text-[9px] text-slate-400 uppercase tracking-widest font-bold">Tour Type</p>
                                    <p class="text-slate-800 text-[11px] font-bold mt-0.5">Private/Group</p>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 border-t border-slate-100 flex justify-between items-center">
                            <div>
                                <p class="text-[9px] text-slate-400 uppercase tracking-widest font-bold leading-none">
                                    Starting From</p>
                                <p class="text-xl font-black text-slate-900 leading-none mt-1.5 font-display">
                                    <?php echo $related_tour['price']; ?> <span
                                        class="text-[10px] text-slate-400 font-normal lowercase">/ guest</span>
                                </p>
                            </div>
                            <a href="<?php echo BASE_URL . $related_tour['link']; ?>"
                                class="relative group/btn overflow-hidden px-5 py-2.5 bg-slate-950 text-white rounded-xl text-xs uppercase tracking-wider font-extrabold shadow-md whitespace-nowrap inline-flex items-center justify-center transition-all duration-300">
                                <div
                                    class="absolute inset-0 bg-gradient-gold opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300 z-0">
                                </div>
                                <span
                                    class="relative z-10 group-hover/btn:text-obsidian-950 transition-colors duration-300">Explore</span>
                                <i
                                    class="fa-solid fa-chevron-right ml-1.5 text-[9px] relative z-10 group-hover/btn:text-obsidian-950 transition-all duration-300 group-hover/btn:translate-x-1.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-14">
            <a href="<?php echo BASE_URL; ?>tours.php"
                class="relative group overflow-hidden px-8 py-4 bg-slate-950 text-white border border-slate-800 text-xs uppercase tracking-widest font-extrabold rounded-full inline-flex items-center justify-center transition-all duration-300 shadow-md hover:shadow-xl hover:shadow-brand/10 hover:-translate-y-0.5 active:translate-y-0">
                <div
                    class="absolute inset-0 bg-gradient-gold opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-0">
                </div>
                <span
                    class="relative z-10 group-hover:text-obsidian-950 transition-colors duration-300 font-bold uppercase tracking-wider">View
                    All Tour Packages</span>
                <i
                    class="fa-solid fa-arrow-right ml-2.5 text-xs text-brand relative z-10 group-hover:text-obsidian-950 transition-all duration-300 group-hover:translate-x-1.5"></i>
            </a>
        </div>

    </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════════════
     SECTION 8 & 9: CTA + FOOTER (Shared Components)
     ═══════════════════════════════════════════════════════════════════════ -->
<?php require_once '../includes/cta.php'; ?>

<?php
require_once '../includes/footer.php';
?>