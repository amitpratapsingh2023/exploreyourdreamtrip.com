<?php
/**
 * Admin Login Page
 */
require_once __DIR__ . '/bootstrap.php';

// Already logged in? → go to dashboard
if (Auth::check()) {
    redirect('dashboard');
}

// Handle login form submission
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error = 'Please enter both email and password.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif (Auth::attempt($email, $password)) {
        redirect('dashboard');
    } else {
        $error = 'Invalid credentials or account is inactive.';
    }
}

$flashErrors = Session::getFlash('error');
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Explore Your Dream Trip</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= SITE_URL ?>/assets/images/brand/favicon.png" />

    <!-- Tailwind CSS CDN -->
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
                        dark: { 950: '#020202', 900: '#050505', 800: '#0a0a0a', 700: '#111111', 600: '#1a1a1a' }
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-20px)
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                opacity: 0.4
            }

            50% {
                opacity: 0.8
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float 6s ease-in-out 3s infinite;
        }

        .animate-pulse-glow {
            animation: pulse-glow 4s ease-in-out infinite;
        }
    </style>
</head>

<body class="min-h-screen bg-dark-900 flex items-center justify-center p-4 relative overflow-hidden font-sans">

    <!-- Ambient Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute top-1/4 -left-20 w-[500px] h-[500px] bg-gold-400/10 rounded-full blur-[150px] animate-float">
        </div>
        <div
            class="absolute bottom-1/4 -right-20 w-[600px] h-[600px] bg-gold-600/8 rounded-full blur-[180px] animate-float-delayed">
        </div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gold-500/5 rounded-full blur-[200px] animate-pulse-glow">
        </div>
        <!-- Grid pattern -->
        <div class="absolute inset-0 opacity-[0.03]"
            style="background-image: radial-gradient(circle, rgba(244,208,63,0.3) 1px, transparent 1px); background-size: 40px 40px;">
        </div>
    </div>

    <!-- Login Card -->
    <div class="w-full max-w-md relative z-10">
        <!-- Logo / Brand -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center mb-6">
                <img src="<?= SITE_URL ?>/assets/images/brand/header-logo.png" alt="Explore Your Dream Trip"
                    class="h-30 w-auto dark:brightness-0 dark:invert opacity-90 hover:opacity-100 transition-opacity">
            </div>
            <h1 class="font-heading text-3xl font-extrabold text-white tracking-tight">Admin Panel</h1>
            <p class="text-gray-500 text-sm mt-2 font-medium">Explore Your Dream Trip Management Console</p>
        </div>

        <!-- Card -->
        <div
            class="bg-dark-800/60 backdrop-blur-2xl border border-white/[0.06] rounded-3xl p-8 md:p-10 shadow-[0_20px_60px_rgba(0,0,0,0.5)]">

            <!-- Error Messages -->
            <?php if ($error): ?>
                <div class="mb-6 p-4 rounded-2xl bg-red-500/10 border border-red-500/20 flex items-center gap-3 text-red-400 text-sm font-medium animate-[fadeIn_0.3s_ease]"
                    id="login-error">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span><?= e($error) ?></span>
                </div>
            <?php endif; ?>

            <?php foreach ($flashErrors as $msg): ?>
                <div
                    class="mb-6 p-4 rounded-2xl bg-amber-500/10 border border-amber-500/20 flex items-center gap-3 text-amber-400 text-sm font-medium">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span><?= e($msg) ?></span>
                </div>
            <?php endforeach; ?>

            <form method="POST" action="" id="loginForm" class="space-y-6" novalidate>

                <!-- Email -->
                <div>
                    <label for="email"
                        class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Email
                        Address</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-600 group-focus-within:text-gold-400 transition-colors">
                            <i class="fa-solid fa-envelope text-sm"></i>
                        </div>
                        <input type="email" id="email" name="email" value="<?= e($_POST['email'] ?? '') ?>" required
                            autocomplete="email"
                            class="w-full bg-white/[0.04] border border-white/[0.08] rounded-2xl pl-12 pr-5 py-4 text-white placeholder:text-gray-600 text-sm font-medium
                                   focus:outline-none focus:border-gold-500/50 focus:bg-white/[0.06] focus:ring-2 focus:ring-gold-500/10 transition-all duration-300"
                            placeholder="admin@exploreyourdreamtrip.com">
                    </div>
                    <p class="hidden mt-2 text-xs text-red-400 font-medium" id="email-error"></p>
                </div>

                <!-- Password -->
                <div>
                    <label for="password"
                        class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Password</label>
                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-600 group-focus-within:text-gold-400 transition-colors">
                            <i class="fa-solid fa-lock text-sm"></i>
                        </div>
                        <input type="password" id="password" name="password" required autocomplete="current-password"
                            class="w-full bg-white/[0.04] border border-white/[0.08] rounded-2xl pl-12 pr-12 py-4 text-white placeholder:text-gray-600 text-sm font-medium
                                   focus:outline-none focus:border-gold-500/50 focus:bg-white/[0.06] focus:ring-2 focus:ring-gold-500/10 transition-all duration-300"
                            placeholder="••••••••">
                        <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-600 hover:text-gold-400 transition-colors cursor-pointer">
                            <i class="fa-solid fa-eye text-sm"></i>
                        </button>
                    </div>
                    <p class="hidden mt-2 text-xs text-red-400 font-medium" id="password-error"></p>
                </div>

                <!-- Submit -->
                <button type="submit" id="loginBtn" class="w-full bg-gradient-to-r from-gold-400 to-gold-500 text-dark-900 font-extrabold py-4 rounded-2xl
                           hover:from-gold-300 hover:to-gold-400 hover:shadow-[0_10px_40px_rgba(244,208,63,0.3)]
                           active:scale-[0.98] transition-all duration-300 text-sm uppercase tracking-widest
                           disabled:opacity-50 disabled:cursor-not-allowed flex items-center justify-center gap-3">
                    <span>Sign In</span>
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </button>
            </form>
        </div>

        <!-- Footer -->
        <p class="text-center text-gray-700 text-xs mt-8 font-medium">
            &copy; <?= date('Y') ?> Explore Your Dream Trip. Secure Admin Access.
        </p>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(function () {
            // Toggle password visibility
            $('#togglePassword').on('click', function () {
                const input = $('#password');
                const icon = $(this).find('i');
                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    input.attr('type', 'password');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });

            // Client-side validation
            $('#loginForm').on('submit', function (e) {
                let valid = true;
                const email = $('#email').val().trim();
                const password = $('#password').val();

                // Reset errors
                $('.border-red-500').removeClass('border-red-500').addClass('border-white/[0.08]');
                $('[id$="-error"]').addClass('hidden').text('');

                // Email validation
                if (!email) {
                    showFieldError('email', 'Email is required.');
                    valid = false;
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    showFieldError('email', 'Enter a valid email address.');
                    valid = false;
                }

                // Password validation
                if (!password) {
                    showFieldError('password', 'Password is required.');
                    valid = false;
                } else if (password.length < 6) {
                    showFieldError('password', 'Password must be at least 6 characters.');
                    valid = false;
                }

                if (!valid) {
                    e.preventDefault();
                    return false;
                }

                // Show loading state
                const btn = $('#loginBtn');
                btn.prop('disabled', true).html('<i class="fa-solid fa-spinner fa-spin"></i> <span>Signing In...</span>');
            });

            function showFieldError(field, message) {
                $(`#${field}`).removeClass('border-white/[0.08]').addClass('border-red-500/50');
                $(`#${field}-error`).removeClass('hidden').text(message);
            }
        });
    </script>
</body>

</html>