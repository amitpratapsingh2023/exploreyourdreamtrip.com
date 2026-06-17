<!-- ═══════════════════════════════════════════════════════════
     SIDEBAR NAVIGATION — Premium Dark Design
     ═══════════════════════════════════════════════════════════ -->
<aside id="sidebar" class="fixed top-0 left-0 z-50 h-full w-[280px] bg-gradient-to-b from-sidebar to-[#0c1425]
           border-r border-white/[0.04] flex flex-col
           transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-out">

    <!-- ── Brand Header ── -->
    <div class="flex items-center justify-between px-7 h-20 border-b border-white/[0.06] shrink-0">
        <a href="dashboard" class="flex-shrink-0">
            <img src="<?= SITE_URL ?>/assets/images/brand/logo.png" alt="Explore Your Dream Trip"
                class="h-8 w-auto brightness-0 invert opacity-90 hover:opacity-100 transition-opacity" />
        </a>
        <!-- Mobile close button -->
        <button id="closeSidebar"
            class="ml-auto lg:hidden w-8 h-8 rounded-lg flex items-center justify-center text-gray-500 hover:text-white hover:bg-white/5 transition-all">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <!-- ── Navigation ── -->
    <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-1 sidebar-scroll">

        <!-- Section: Main -->
        <p class="text-[10px] font-bold text-gray-600 uppercase tracking-[0.2em] px-3 mb-3">Overview</p>

        <a href="dashboard" class="sidebar-link <?= activeClass('dashboard') ?>">
            <div class="sidebar-icon"><i class="fa-solid fa-grid-2 text-[13px]"></i></div>
            <span>Dashboard</span>
        </a>

        <!-- Section: Content -->
        <p class="text-[10px] font-bold text-gray-600 uppercase tracking-[0.2em] px-3 mb-3 mt-8">Content</p>

        <a href="blogs" class="sidebar-link <?= activeClass('blogs') ?> <?= activeClass('blog-form') ?>">
            <div class="sidebar-icon"><i class="fa-solid fa-newspaper text-[13px]"></i></div>
            <span>Blog Posts</span>
            <?php
            $blogModel = new BlogModel();
            $draftCount = $blogModel->count(['status' => 'draft']);
            if ($draftCount > 0):
                ?>
                <span
                    class="ml-auto px-2 py-0.5 rounded-md bg-amber-500/10 text-amber-400 text-[10px] font-bold"><?= $draftCount ?></span>
            <?php endif; ?>
        </a>

        <a href="categories" class="sidebar-link <?= activeClass('categories') ?> <?= activeClass('category-form') ?>">
            <div class="sidebar-icon"><i class="fa-solid fa-folder-tree text-[13px]"></i></div>
            <span>Categories</span>
        </a>

        <a href="tags" class="sidebar-link <?= activeClass('tags') ?> <?= activeClass('tag-form') ?>">
            <div class="sidebar-icon"><i class="fa-solid fa-tags text-[13px]"></i></div>
            <span>Tags</span>
        </a>

        <a href="authors" class="sidebar-link <?= activeClass('authors') ?> <?= activeClass('author-form') ?>">
            <div class="sidebar-icon"><i class="fa-solid fa-pen-fancy text-[13px]"></i></div>
            <span>Authors</span>
        </a>

        <!-- Section: Business -->
        <p class="text-[10px] font-bold text-gray-600 uppercase tracking-[0.2em] px-3 mb-3 mt-8">Business</p>

        <a href="leads" class="sidebar-link <?= activeClass('leads') ?>">
            <div class="sidebar-icon"><i class="fa-solid fa-inbox text-[13px]"></i></div>
            <span>Leads</span>
            <?php
            $leadModel = new LeadModel();
            $newLeads = $leadModel->count(['status' => 'new']);
            if ($newLeads > 0):
                ?>
                <span
                    class="ml-auto px-2 py-0.5 rounded-md bg-blue-500/10 text-blue-400 text-[10px] font-bold"><?= $newLeads ?></span>
            <?php endif; ?>
        </a>

        <a href="newsletters" class="sidebar-link <?= activeClass('newsletters') ?>">
            <div class="sidebar-icon"><i class="fa-solid fa-envelope-open-text text-[13px]"></i></div>
            <span>Newsletters</span>
        </a>

        <!-- Section: System -->
        <p class="text-[10px] font-bold text-gray-600 uppercase tracking-[0.2em] px-3 mb-3 mt-8">System</p>

        <a href="admins" class="sidebar-link <?= activeClass('admins') ?> <?= activeClass('admin-form') ?>">
            <div class="sidebar-icon"><i class="fa-solid fa-user-shield text-[13px]"></i></div>
            <span>Admin Accounts</span>
        </a>

    </nav>

    <!-- ── User Profile (bottom) ── -->
    <div class="shrink-0 border-t border-white/[0.06] p-4">
        <div class="flex items-center gap-3 p-3 rounded-2xl hover:bg-white/[0.03] transition-colors group cursor-pointer"
            id="userMenuTrigger">
            <div
                class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold-400/20 to-gold-600/20 flex items-center justify-center text-gold-400 font-bold text-sm border border-gold-500/10">
                <?= Auth::initials() ?>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-white truncate"><?= e(Auth::name()) ?></p>
                <p class="text-[10px] text-gray-500 truncate"><?= e(Auth::email()) ?></p>
            </div>
            <i class="fa-solid fa-ellipsis-vertical text-gray-600 group-hover:text-gray-400 text-xs"></i>
        </div>
        <!-- Dropdown -->
        <div id="userMenu" class="hidden mt-2 p-2 bg-[#1a2744] rounded-xl border border-white/[0.06] shadow-xl">
            <a href="admins?action=edit&id=<?= Auth::id() ?>"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-gray-400 hover:text-white hover:bg-white/[0.04] transition-all">
                <i class="fa-solid fa-user-pen text-xs w-4"></i> Edit Profile
            </a>
            <hr class="border-white/[0.06] my-1">
            <a href="logout"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-red-400 hover:text-red-300 hover:bg-red-500/5 transition-all">
                <i class="fa-solid fa-right-from-bracket text-xs w-4"></i> Sign Out
            </a>
        </div>
    </div>
</aside>

<!-- ═══════════════════════════════════════════════════════════
     MAIN CONTENT WRAPPER
     ═══════════════════════════════════════════════════════════ -->
<main class="flex-1 lg:ml-[280px] min-h-screen flex flex-col">

    <!-- ── Top Header Bar ── -->
    <header
        class="sticky top-0 z-30 bg-white/80 dark:bg-dark-900/80 backdrop-blur-xl border-b border-gray-200/60 dark:border-white/[0.04] h-20 flex items-center px-6 lg:px-10 shrink-0">
        <!-- Mobile menu toggle -->
        <button id="openSidebar"
            class="lg:hidden w-10 h-10 rounded-xl flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-white/5 transition-all mr-4">
            <i class="fa-solid fa-bars text-lg"></i>
        </button>

        <!-- Page Title (mobile) -->
        <h2 class="font-heading text-lg font-bold lg:hidden"><?= e($pageTitle ?? 'Dashboard') ?></h2>

        <!-- Search (desktop) -->
        <div class="hidden lg:flex items-center flex-1 max-w-md">
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-gray-400">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </div>
                <input type="text" placeholder="Search anything..."
                    class="w-full bg-gray-100 dark:bg-white/[0.04] border border-transparent rounded-xl pl-11 pr-4 py-3 text-sm font-medium
                           placeholder:text-gray-400 dark:placeholder:text-gray-600
                           focus:outline-none focus:border-gold-400/30 focus:bg-white dark:focus:bg-white/[0.06] transition-all">
            </div>
        </div>

        <!-- Right Actions -->
        <div class="flex items-center gap-3 ml-auto">

            <!-- Theme Toggle -->
            <button id="themeToggle"
                class="w-10 h-10 rounded-xl flex items-center justify-center text-gray-500 hover:text-gold-500 hover:bg-gray-100 dark:hover:bg-white/5 transition-all"
                title="Toggle theme">
                <i class="fa-solid fa-sun text-sm dark:hidden"></i>
                <i class="fa-solid fa-moon text-sm hidden dark:inline"></i>
            </button>

            <!-- Visit Site -->
            <a href="<?= SITE_URL ?>/" target="_blank"
                class="hidden sm:flex w-10 h-10 rounded-xl items-center justify-center text-gray-500 hover:text-gold-500 hover:bg-gray-100 dark:hover:bg-white/5 transition-all"
                title="Visit website">
                <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
            </a>

            <!-- Notifications (cosmetic) -->
            <button
                class="relative w-10 h-10 rounded-xl flex items-center justify-center text-gray-500 hover:text-gold-500 hover:bg-gray-100 dark:hover:bg-white/5 transition-all"
                title="Notifications">
                <i class="fa-solid fa-bell text-sm"></i>
                <span
                    class="absolute top-2 right-2 w-2 h-2 bg-gold-400 rounded-full ring-2 ring-white dark:ring-dark-900"></span>
            </button>
        </div>
    </header>

    <!-- ── Page Content ── -->
    <div class="flex-1 p-6 lg:p-10">

        <!-- Flash Messages -->
        <?php
        $flashSuccess = Session::getFlash('success');
        $flashError = Session::getFlash('error');
        $flashInfo = Session::getFlash('info');
        ?>
        <?php foreach ($flashSuccess as $msg): ?>
            <div
                class="mb-6 p-4 rounded-2xl bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200 dark:border-emerald-500/20 flex items-center gap-3 text-emerald-700 dark:text-emerald-400 text-sm font-medium flash-message">
                <i class="fa-solid fa-circle-check"></i>
                <span><?= e($msg) ?></span>
                <button class="ml-auto text-emerald-400 hover:text-emerald-600 flash-dismiss"><i
                        class="fa-solid fa-xmark"></i></button>
            </div>
        <?php endforeach; ?>
        <?php foreach ($flashError as $msg): ?>
            <div
                class="mb-6 p-4 rounded-2xl bg-red-50 dark:bg-red-500/10 border border-red-200 dark:border-red-500/20 flex items-center gap-3 text-red-700 dark:text-red-400 text-sm font-medium flash-message">
                <i class="fa-solid fa-circle-exclamation"></i>
                <span><?= e($msg) ?></span>
                <button class="ml-auto text-red-400 hover:text-red-600 flash-dismiss"><i
                        class="fa-solid fa-xmark"></i></button>
            </div>
        <?php endforeach; ?>
        <?php foreach ($flashInfo as $msg): ?>
            <div
                class="mb-6 p-4 rounded-2xl bg-blue-50 dark:bg-blue-500/10 border border-blue-200 dark:border-blue-500/20 flex items-center gap-3 text-blue-700 dark:text-blue-400 text-sm font-medium flash-message">
                <i class="fa-solid fa-circle-info"></i>
                <span><?= e($msg) ?></span>
                <button class="ml-auto text-blue-400 hover:text-blue-600 flash-dismiss"><i
                        class="fa-solid fa-xmark"></i></button>
            </div>
        <?php endforeach; ?>