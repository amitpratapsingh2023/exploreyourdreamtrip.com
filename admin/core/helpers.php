<?php
/**
 * Helper functions for the admin panel
 */

/** Sanitize output for HTML */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/** Generate a URL-friendly slug */
function slugify(string $text): string
{
    $text = strtolower(trim($text));
    $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
    $text = preg_replace('/[\s-]+/', '-', $text);
    return trim($text, '-');
}

/** Truncate text to a given length */
function truncate(string $text, int $length = 100, string $suffix = '...'): string
{
    if (mb_strlen($text) <= $length) return $text;
    return mb_substr($text, 0, $length) . $suffix;
}

/** Format date for display */
function formatDate(?string $date, string $format = 'd M Y'): string
{
    if (!$date) return '—';
    return date($format, strtotime($date));
}

/** Format date as relative time (e.g. "2 hours ago") */
function timeAgo(?string $datetime): string
{
    if (!$datetime) return '—';
    $time = strtotime($datetime);
    $diff = time() - $time;

    if ($diff < 60) return 'Just now';
    if ($diff < 3600) return floor($diff / 60) . 'm ago';
    if ($diff < 86400) return floor($diff / 3600) . 'h ago';
    if ($diff < 604800) return floor($diff / 86400) . 'd ago';
    return date('d M Y', $time);
}

/** Get current page name from URL */
function currentPage(): string
{
    return basename($_SERVER['PHP_SELF'], '.php');
}

/** Check if a given page is the current page */
function isCurrentPage(string $page): bool
{
    return currentPage() === $page;
}

/** Active class helper for sidebar navigation */
function activeClass(string $page, string $class = 'active'): string
{
    return isCurrentPage($page) ? $class : '';
}

/** Redirect to a URL */
function redirect(string $url): void
{
    header("Location: {$url}");
    exit;
}

/** Return JSON response */
function jsonResponse(array $data, int $statusCode = 200): void
{
    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

/** Resolve a stored media path to an absolute filesystem path */
function mediaFilesystemPath(?string $path): ?string
{
    $resolved = trim((string) $path);

    if ($resolved === '') {
        return null;
    }

    if (preg_match('#^(https?:)?//#i', $resolved)) {
        return null;
    }

    $resolved = ltrim(str_replace('\\', '/', $resolved), '/');

    if (strpos($resolved, 'assets/') === 0) {
        return SITE_ROOT . '/' . $resolved;
    }

    if (strpos($resolved, 'uploads/') === 0) {
        return ADMIN_ROOT . '/' . $resolved;
    }

    return SITE_ROOT . '/' . $resolved;
}

/** Resolve a stored media path to an admin-page src */
function adminMediaSrc(?string $path, string $fallback = ''): string
{
    $resolved = trim((string) ($path ?: $fallback));

    if ($resolved === '') {
        return '';
    }

    if (preg_match('#^(https?:)?//#i', $resolved)) {
        return $resolved;
    }

    $resolved = ltrim(str_replace('\\', '/', $resolved), '/');

    if (strpos($resolved, 'assets/') === 0) {
        return defined('SITE_URL') ? SITE_URL . '/' . $resolved : '../' . $resolved;
    }

    return $resolved;
}

/** Upload an image file */
function uploadImage(array $file, string $directory, string $filename = ''): string|false
{
    $directory = trim($directory, '/');

    if (in_array($directory, ['blogs', 'authors'], true)) {
        $assetDirectory = $directory === 'blogs' ? 'blog' : 'authors';
        $uploadDir = SITE_ROOT . '/assets/images/' . $assetDirectory . '/';
        $dbPath = 'assets/images/' . $assetDirectory . '/';
    } else {
        $uploadDir = ADMIN_ROOT . '/uploads/' . $directory . '/';
        $dbPath = 'uploads/' . $directory . '/';
    }

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
    $maxSize = 1 * 1024 * 1024; // 1MB

    if (!in_array($file['type'], $allowed)) return false;
    if ($file['size'] > $maxSize) return false;

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $name = $filename ?: uniqid('img_');
    $name = slugify($name) . '.' . strtolower($ext);

    $targetPath = $uploadDir . $name;
    if (file_exists($targetPath)) {
        $baseName = pathinfo($name, PATHINFO_FILENAME);
        $name = $baseName . '-' . date('YmdHis') . '-' . substr(uniqid('', true), -6) . '.' . strtolower($ext);
        $targetPath = $uploadDir . $name;
    }

    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        return $dbPath . $name;
    }
    return false;
}

/** Delete an uploaded file */
function deleteUploadedFile(?string $path): bool
{
    $fullPath = mediaFilesystemPath($path);

    if ($fullPath && file_exists($fullPath)) {
        return unlink($fullPath);
    }

    return false;
}

/** Get status badge HTML */
function statusBadge(int|string $status, string $type = 'default'): string
{
    if ($type === 'blog') {
        $map = [
            'draft'     => ['Draft', 'bg-amber-100 text-amber-700 dark:bg-amber-500/10 dark:text-amber-400'],
            'published' => ['Published', 'bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-400'],
            'scheduled' => ['Scheduled', 'bg-blue-100 text-blue-700 dark:bg-blue-500/10 dark:text-blue-400'],
        ];
        $info = $map[$status] ?? ['Unknown', 'bg-gray-100 text-gray-600'];
    } elseif ($type === 'lead') {
        $map = [
            'new'       => ['New', 'bg-blue-100 text-blue-700 dark:bg-blue-500/10 dark:text-blue-400'],
            'contacted' => ['Contacted', 'bg-purple-100 text-purple-700 dark:bg-purple-500/10 dark:text-purple-400'],
            'qualified' => ['Qualified', 'bg-amber-100 text-amber-700 dark:bg-amber-500/10 dark:text-amber-400'],
            'converted' => ['Converted', 'bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-400'],
            'closed'    => ['Closed', 'bg-gray-200 text-gray-600 dark:bg-gray-700 dark:text-gray-400'],
        ];
        $info = $map[$status] ?? ['Unknown', 'bg-gray-100 text-gray-600'];
    } else {
        $info = $status
            ? ['Active', 'bg-emerald-100 text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-400']
            : ['Inactive', 'bg-red-100 text-red-600 dark:bg-red-500/10 dark:text-red-400'];
    }

    return '<span class="inline-flex items-center px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider ' . $info[1] . '">' . $info[0] . '</span>';
}

/** Render pagination HTML */
function renderPagination(array $pagination, string $baseUrl): string
{
    if ($pagination['totalPages'] <= 1) return '';

    $html = '<div class="flex items-center justify-between mt-8"><div class="text-sm text-gray-500 dark:text-gray-400">';
    $html .= 'Showing <span class="font-semibold text-gray-900 dark:text-white">' . (($pagination['page'] - 1) * $pagination['perPage'] + 1) . '</span>';
    $html .= ' to <span class="font-semibold text-gray-900 dark:text-white">' . min($pagination['page'] * $pagination['perPage'], $pagination['total']) . '</span>';
    $html .= ' of <span class="font-semibold text-gray-900 dark:text-white">' . $pagination['total'] . '</span></div>';
    $html .= '<div class="flex items-center gap-2">';

    // Previous
    if ($pagination['page'] > 1) {
        $html .= '<a href="' . $baseUrl . '&page=' . ($pagination['page'] - 1) . '" class="w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:border-gold-400 hover:text-gold-500 transition-all"><i class="fa-solid fa-chevron-left text-xs"></i></a>';
    }

    // Page numbers
    for ($i = max(1, $pagination['page'] - 2); $i <= min($pagination['totalPages'], $pagination['page'] + 2); $i++) {
        $active = $i === $pagination['page'];
        $cls = $active
            ? 'w-10 h-10 rounded-xl bg-gold-500 text-dark-900 font-bold flex items-center justify-center shadow-lg shadow-gold-500/20'
            : 'w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-600 dark:text-gray-400 font-medium hover:border-gold-400 hover:text-gold-500 transition-all';
        $html .= '<a href="' . $baseUrl . '&page=' . $i . '" class="' . $cls . '">' . $i . '</a>';
    }

    // Next
    if ($pagination['page'] < $pagination['totalPages']) {
        $html .= '<a href="' . $baseUrl . '&page=' . ($pagination['page'] + 1) . '" class="w-10 h-10 rounded-xl border border-gray-200 dark:border-white/10 flex items-center justify-center text-gray-500 hover:border-gold-400 hover:text-gold-500 transition-all"><i class="fa-solid fa-chevron-right text-xs"></i></a>';
    }

    $html .= '</div></div>';
    return $html;
}

/** Get old input value for form repopulation */
function old(string $key, string $default = ''): string
{
    return e(Session::get('_old_input')[$key] ?? $default);
}

/** Store old input in session */
function storeOldInput(array $data): void
{
    Session::set('_old_input', $data);
}

/** Clear old input */
function clearOldInput(): void
{
    Session::remove('_old_input');
}
