<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_TITLE . ' | ' . SITE_NAME; ?></title>
    <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : SITE_DESC; ?>">

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
    <div class="bg-obsidian-950 text-slate-300 py-2 px-4 border-b border-white/5 text-sm hidden md:block z-50 relative">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>" class="hover:text-brand transition-colors">
                    <i class="fa-solid fa-phone text-brand mr-2"></i><?php echo CONTACT_PHONE; ?>
                </a>
                <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="hover:text-brand transition-colors">
                    <i class="fa-solid fa-envelope text-brand mr-2"></i><?php echo CONTACT_EMAIL; ?>
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-xs bg-brand/10 text-brand px-2 py-0.5 rounded-full border border-brand/20">Govt.
                    Approved Agency</span>
                <div class="flex items-center space-x-3 border-l border-white/10 pl-4">
                    <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank"
                        class="hover:text-brand transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank"
                        class="hover:text-brand transition-colors"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank"
                        class="hover:text-brand transition-colors"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header id="main-header"
        class="fixed top-0 md:top-9 left-0 w-full z-45 transition-all duration-300 bg-transparent py-4 px-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">

            <!-- Brand Logo -->
            <a href="<?php echo BASE_URL; ?>" class="flex items-center">
                <img src="<?php echo BASE_URL; ?>assets/images/brand/header-logo.png"
                    alt="<?php echo SITE_NAME; ?> Logo"
                    class="h-12 md:h-14 w-auto object-contain transition-transform duration-300 hover:scale-105">
            </a>

            <!-- Desktop Menu Links -->
            <nav class="hidden lg:flex items-center space-x-8 text-white font-medium">
                <a href="<?php echo BASE_URL; ?>"
                    class="hover:text-brand transition-colors duration-200 border-b-2 border-transparent hover:border-brand py-1">Home</a>
                <a href="<?php echo BASE_URL; ?>#destinations"
                    class="hover:text-brand transition-colors duration-200 border-b-2 border-transparent hover:border-brand py-1">Tours</a>
                <a href="<?php echo BASE_URL; ?>tempo-traveller.php"
                    class="hover:text-brand transition-colors duration-200 border-b-2 border-transparent hover:border-brand py-1">Tempo
                    Traveller</a>
                <a href="<?php echo BASE_URL; ?>car-rental.php"
                    class="hover:text-brand transition-colors duration-200 border-b-2 border-transparent hover:border-brand py-1">Car
                    Rental</a>
                <a href="<?php echo BASE_URL; ?>about.php"
                    class="hover:text-brand transition-colors duration-200 border-b-2 border-transparent hover:border-brand py-1">About</a>
                <a href="<?php echo BASE_URL; ?>contact.php"
                    class="hover:text-brand transition-colors duration-200 border-b-2 border-transparent hover:border-brand py-1">Contact</a>
            </nav>

            <!-- Navigation Actions (Desktop Only) -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="tel:<?php echo CONTACT_PHONE_RAW; ?>"
                    class="flex items-center text-white bg-white/10 hover:bg-white/20 border border-white/20 px-4 py-2 rounded-full font-semibold transition-all duration-300">
                    <i class="fa-solid fa-phone mr-2 text-brand"></i> Call Now
                </a>
                <a href="#inquiry"
                    class="bg-gradient-gold text-obsidian-950 px-6 py-2.5 rounded-full font-bold hover:shadow-lg hover:shadow-brand/20 transition-all duration-300 hover:-translate-y-0.5">
                    Plan My Trip
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
        class="fixed inset-0 bg-slate-950/70 backdrop-blur-sm z-50 hidden transition-opacity duration-300"></div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu-drawer"
        class="fixed top-0 right-0 w-80 h-full bg-obsidian-950 text-white z-55 transform translate-x-full transition-transform duration-300 ease-in-out shadow-2xl flex flex-col border-l border-white/10">
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
                class="block py-3 text-lg font-semibold border-b border-white/5 hover:text-brand transition-colors">Home</a>
            <a href="<?php echo BASE_URL; ?>#destinations"
                class="block py-3 text-lg font-semibold border-b border-white/5 hover:text-brand transition-colors">Popular
                Tours</a>
            <a href="<?php echo BASE_URL; ?>tempo-traveller.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 hover:text-brand transition-colors">Tempo
                Traveller</a>
            <a href="<?php echo BASE_URL; ?>car-rental.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 hover:text-brand transition-colors">Car
                Rental</a>
            <a href="<?php echo BASE_URL; ?>about.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 hover:text-brand transition-colors">About
                Us</a>
            <a href="<?php echo BASE_URL; ?>contact.php"
                class="block py-3 text-lg font-semibold border-b border-white/5 hover:text-brand transition-colors">Contact
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