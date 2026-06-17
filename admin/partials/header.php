<!DOCTYPE html>
<html lang="en" class="scroll-smooth" id="htmlRoot">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle ?? 'Dashboard') ?> — Explore Your Dream Trip Admin</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= SITE_URL ?>/assets/images/brand/favicon.png" />

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        heading: ['Poppins', 'Inter', 'system-ui', 'sans-serif']
                    },
                    colors: {
                        gold: {
                            50: '#FEF9E7', 100: '#FEF5E7', 200: '#FCE5A0', 300: '#F8D85C',
                            400: '#F4D03F', 500: '#D4B93C', 600: '#C49F1A', 700: '#9A7D14',
                            800: '#705B0E', 900: '#473A09',
                        },
                        dark: { 950: '#020202', 900: '#050505', 800: '#0a0a0a', 700: '#111111', 600: '#1a1a1a' },
                        sidebar: { DEFAULT: '#0f172a', hover: '#1e293b', active: '#172044' }
                    }
                }
            }
        }
    </script>
    <script>
            // Theme initialization (prevents flash)
            (function () {
                const t = localStorage.getItem('admin_theme');
                if (t === 'dark' || (!t && window.matchMedia('(prefers-color-scheme:dark)').matches)) {
                    document.documentElement.classList.add('dark');
                }
            })();
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Admin CSS -->
    <link rel="stylesheet" href="assets/css/admin.css">

    <!-- CKEditor (only on pages that need it) -->
    <?php if (($useCKEditor ?? false)): ?>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <?php endif; ?>
</head>

<body
    class="font-sans bg-gray-50 dark:bg-dark-900 text-gray-900 dark:text-gray-100 transition-colors duration-300 antialiased">

    <!-- Mobile Overlay -->
    <div id="sidebarOverlay"
        class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 hidden lg:hidden transition-opacity"></div>

    <div class="flex min-h-screen">