<?php
require_once __DIR__ . '/config.php';
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir = basename(dirname($_SERVER['PHP_SELF']));
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_TITLE . ' | ' . SITE_NAME; ?></title>
    <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : SITE_DESC; ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_TITLE . ' | ' . SITE_NAME; ?>">
    <meta property="og:description" content="<?php echo isset($page_desc) ? $page_desc : SITE_DESC; ?>">
    <meta property="og:image" content="<?php echo BASE_URL; ?>assets/images/hero.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_TITLE . ' | ' . SITE_NAME; ?>">
    <meta property="twitter:description" content="<?php echo isset($page_desc) ? $page_desc : SITE_DESC; ?>">
    <meta property="twitter:image" content="<?php echo BASE_URL; ?>assets/images/hero.png">

    <!-- Structured Data (JSON-LD) - Local Business Details -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TravelAgency",
      "name": "<?php echo SITE_NAME; ?>",
      "description": "<?php echo SITE_DESC; ?>",
      "url": "<?php echo BASE_URL; ?>",
      "telephone": "<?php echo CONTACT_PHONE; ?>",
      "email": "<?php echo CONTACT_EMAIL; ?>",
      "logo": "<?php echo BASE_URL; ?>assets/images/brand/header-logo.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo CONTACT_ADDRESS; ?>",
        "addressLocality": "New Delhi",
        "addressCountry": "IN"
      },
      "sameAs": [
        "<?php echo SOCIAL_FACEBOOK; ?>",
        "<?php echo SOCIAL_INSTAGRAM; ?>",
        "<?php echo SOCIAL_TWITTER; ?>",
        "<?php echo SOCIAL_YOUTUBE; ?>"
      ]
    }
    </script>

    <?php if ($current_page === 'tours.php'): ?>
    <!-- Structured Data (JSON-LD) - Breadcrumbs for Tours -->
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
        }
      ]
    }
    </script>
    <?php endif; ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>assets/images/brand/favicon.png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            light: '#fbe66e',
                            DEFAULT: '#f0d25a', // Brand Gold from logo
                            dark: '#e1b44b',
                            accent: '#b49152',
                            goldText: '#fad264'
                        },
                        obsidian: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            800: '#1E293B',
                            900: '#0F172A',
                            950: '#0B0F17', // Deep luxury slate/dark
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Style Sheet -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/custom.css">
</head>

<body class="bg-slate-50 text-obsidian-950 flex flex-col min-h-screen">

    <!-- Top Utility Bar (Hidden on Mobile) -->
    <div
        class="bg-slate-950/95 text-slate-400 py-2.5 px-6 border-b border-white/5 text-[10px] uppercase tracking-widest font-bold hidden md:block z-50 relative">
        <div class="w-full max-w-[1440px] mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-8">
                <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
                    class="hover:text-brand flex items-center transition-colors">
                    <i class="fa-solid fa-phone text-brand mr-2.5 text-xs"></i><?php echo CONTACT_PHONE; ?>
                </a>
                <a href="mailto:<?php echo CONTACT_EMAIL; ?>"
                    class="hover:text-brand flex items-center transition-colors normal-case">
                    <i class="fa-solid fa-envelope text-brand mr-2.5 text-xs"></i><?php echo CONTACT_EMAIL; ?>
                </a>
            </div>
            <div class="flex items-center space-x-6">
                <span
                    class="bg-brand/10 text-brand px-3 py-1 rounded border border-brand/25 text-[9px] uppercase tracking-widest font-extrabold">Govt.
                    Approved Agency</span>
                <div class="flex items-center space-x-4 border-l border-white/10 pl-6 py-0.5">
                    <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank"
                        class="hover:text-brand text-xs transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank"
                        class="hover:text-brand text-xs transition-colors"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank"
                        class="hover:text-brand text-xs transition-colors"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header id="main-header"
        class="fixed top-0 md:top-9 left-0 w-full z-40 transition-all duration-300 bg-transparent py-4 px-6 md:px-12">
        <div class="w-full max-w-[1440px] mx-auto flex justify-between items-center">

            <!-- Brand Logo -->
            <a href="<?php echo BASE_URL; ?>" class="flex items-center">
                <img src="<?php echo BASE_URL; ?>assets/images/brand/header-logo.png"
                    alt="<?php echo SITE_NAME; ?> Logo"
                    class="h-14 md:h-16 w-auto object-contain transition-transform duration-300 hover:scale-105">
            </a>

            <!-- Desktop Menu Links -->
            <nav class="hidden lg:flex items-center space-x-10 text-white">
                <a href="<?php echo BASE_URL; ?>"
                    class="nav-link-premium <?php echo ($current_page === 'index.php' && $current_dir !== 'tours') ? 'active-link' : 'text-white/80 hover:text-brand'; ?>">Home</a>
                <a href="<?php echo BASE_URL; ?>tours.php"
                    class="nav-link-premium <?php echo ($current_page === 'tours.php' || $current_dir === 'tours') ? 'active-link' : 'text-white/80 hover:text-brand'; ?>">Tours</a>
                <a href="<?php echo BASE_URL; ?>tempo-traveller.php"
                    class="nav-link-premium <?php echo ($current_page === 'tempo-traveller.php') ? 'active-link' : 'text-white/80 hover:text-brand'; ?>">Tempo
                    Traveller</a>
                <a href="<?php echo BASE_URL; ?>car-rental.php"
                    class="nav-link-premium <?php echo ($current_page === 'car-rental.php') ? 'active-link' : 'text-white/80 hover:text-brand'; ?>">Car
                    Rental</a>
                <a href="<?php echo BASE_URL; ?>about.php"
                    class="nav-link-premium <?php echo ($current_page === 'about.php') ? 'active-link' : 'text-white/80 hover:text-brand'; ?>">About</a>
                <a href="<?php echo BASE_URL; ?>contact.php"
                    class="nav-link-premium <?php echo ($current_page === 'contact.php') ? 'active-link' : 'text-white/80 hover:text-brand'; ?>">Contact</a>
            </nav>

            <!-- Navigation Actions (Desktop Only) -->
            <div class="hidden lg:flex items-center space-x-5">
                <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
                    class="group inline-flex items-center text-white/90 hover:text-brand bg-slate-950/40 hover:bg-slate-950/60 border border-white/10 hover:border-brand/40 px-5 py-2.5 rounded-full text-xs uppercase tracking-wider font-bold transition-all duration-300">
                    <i
                        class="fa-solid fa-phone text-brand mr-2.5 transition-transform duration-300 group-hover:scale-110"></i>
                    <span>Call Now</span>
                </a>
                <a href="#inquiry"
                    class="group inline-flex items-center justify-center bg-gradient-gold text-obsidian-950 px-6 py-2.5 rounded-full text-xs uppercase tracking-widest font-extrabold shadow-[0_0_15px_rgba(240,210,90,0.15)] hover:shadow-[0_0_25px_rgba(240,210,90,0.35)] transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0">
                    <span>Plan My Trip</span>
                    <i
                        class="fa-solid fa-arrow-right ml-2 text-xs transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-menu-btn"
                class="lg:hidden text-white bg-slate-900/50 p-2.5 rounded-full border border-white/10 hover:bg-slate-900/80 transition-colors focus:outline-none"
                aria-label="Open menu">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>

        </div>
    </header>

    <!-- Mobile Drawer Overlay -->
    <div id="mobile-menu-overlay"
        class="fixed inset-0 bg-slate-950/70 backdrop-blur-sm z-[100] hidden transition-opacity duration-300"></div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu-drawer"
        class="fixed top-0 right-0 w-80 h-full bg-obsidian-950 text-white z-[110] transform translate-x-full transition-transform duration-300 ease-in-out shadow-2xl flex flex-col border-l border-white/10">
        <!-- Close & Header -->
        <div class="p-5 flex justify-between items-center border-b border-white/10">
            <img src="<?php echo BASE_URL; ?>assets/images/brand/header-logo.png" alt="Explore Your Dream Trip"
                class="h-10 w-auto object-contain">
            <button id="mobile-menu-close"
                class="text-white hover:text-brand transition-colors p-2 rounded-full hover:bg-white/5 focus:outline-none"
                aria-label="Close menu">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </button>
        </div>

        <!-- Navigation Links -->
        <div class="flex-grow py-6 overflow-y-auto px-6 space-y-4">
            <a href="<?php echo BASE_URL; ?>"
                class="block py-3 text-lg font-semibold border-b border-white/5 <?php echo ($current_page === 'index.php' && $current_dir !== 'tours') ? 'text-brand' : 'text-slate-300'; ?> hover:text-brand transition-colors">Home</a>
            <a href="<?php echo BASE_URL; ?>tours.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 <?php echo ($current_page === 'tours.php' || $current_dir === 'tours') ? 'text-brand' : 'text-slate-300'; ?> hover:text-brand transition-colors">Popular
                Tours</a>
            <a href="<?php echo BASE_URL; ?>tempo-traveller.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 <?php echo ($current_page === 'tempo-traveller.php') ? 'text-brand' : 'text-slate-300'; ?> hover:text-brand transition-colors">Tempo
                Traveller</a>
            <a href="<?php echo BASE_URL; ?>car-rental.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 <?php echo ($current_page === 'car-rental.php') ? 'text-brand' : 'text-slate-300'; ?> hover:text-brand transition-colors">Car
                Rental</a>
            <a href="<?php echo BASE_URL; ?>about.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 <?php echo ($current_page === 'about.php') ? 'text-brand' : 'text-slate-300'; ?> hover:text-brand transition-colors">About
                Us</a>
            <a href="<?php echo BASE_URL; ?>contact.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 <?php echo ($current_page === 'contact.php') ? 'text-brand' : 'text-slate-300'; ?> hover:text-brand transition-colors">Contact
                Us</a>

            <!-- Quick Contact info inside mobile menu -->
            <div class="pt-6 space-y-4 text-sm text-slate-400">
                <p class="font-bold text-brand uppercase tracking-wider text-xs">Reach Us At</p>
                <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
                    class="flex items-center space-x-3 text-white hover:text-brand transition-colors">
                    <i class="fa-solid fa-phone text-brand text-base"></i>
                    <span><?php echo CONTACT_PHONE; ?></span>
                </a>
                <a href="mailto:<?php echo CONTACT_EMAIL; ?>"
                    class="flex items-center space-x-3 text-white hover:text-brand transition-colors">
                    <i class="fa-solid fa-envelope text-brand text-base"></i>
                    <span><?php echo CONTACT_EMAIL; ?></span>
                </a>
                <div class="flex items-center space-x-3 text-white">
                    <i class="fa-solid fa-location-dot text-brand text-base"></i>
                    <span><?php echo CONTACT_ADDRESS; ?></span>
                </div>
            </div>
        </div>

        <!-- CTA Action in Drawer Footer -->
        <div class="p-6 bg-slate-900 border-t border-white/10 space-y-3">
            <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
                class="w-full flex justify-center items-center py-3 bg-white/5 hover:bg-white/10 border border-white/15 rounded-full font-bold text-white transition-colors">
                <i class="fa-solid fa-phone mr-2 text-brand"></i> Call Agent
            </a>
            <a href="<?php echo WHATSAPP_LINK; ?>" target="_blank"
                class="w-full flex justify-center items-center py-3 bg-emerald-600 hover:bg-emerald-700 rounded-full font-bold text-white transition-colors">
                <i class="fa-brands fa-whatsapp mr-2 text-xl"></i> Chat on WhatsApp
            </a>
        </div>
    </div>