<?php
/**
 * Session — Secure session management
 */
class Session
{
    private static bool $started = false;

    /** Start session with secure settings */
    public static function start(): void
    {
        if (self::$started) return;

        if (session_status() === PHP_SESSION_NONE) {
            ini_set('session.cookie_httponly', '1');
            ini_set('session.use_strict_mode', '1');
            ini_set('session.cookie_samesite', 'Lax');
            session_name('VWT_ADMIN');
            session_start();
        }
        self::$started = true;
    }

    /** Set a session value */
    public static function set(string $key, mixed $value): void
    {
        self::start();
        $_SESSION[$key] = $value;
    }

    /** Get a session value */
    public static function get(string $key, mixed $default = null): mixed
    {
        self::start();
        return $_SESSION[$key] ?? $default;
    }

    /** Check if key exists */
    public static function has(string $key): bool
    {
        self::start();
        return isset($_SESSION[$key]);
    }

    /** Remove a session key */
    public static function remove(string $key): void
    {
        self::start();
        unset($_SESSION[$key]);
    }

    /** Flash message — set for next request */
    public static function flash(string $type, string $message): void
    {
        self::start();
        $_SESSION['_flash'][$type][] = $message;
    }

    /** Get and clear flash messages */
    public static function getFlash(string $type = ''): array
    {
        self::start();
        if ($type) {
            $messages = $_SESSION['_flash'][$type] ?? [];
            unset($_SESSION['_flash'][$type]);
            return $messages;
        }
        $all = $_SESSION['_flash'] ?? [];
        unset($_SESSION['_flash']);
        return $all;
    }

    /** Check for flash messages */
    public static function hasFlash(string $type = ''): bool
    {
        self::start();
        if ($type) return !empty($_SESSION['_flash'][$type]);
        return !empty($_SESSION['_flash']);
    }

    /** Destroy session completely */
    public static function destroy(): void
    {
        self::start();
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
            $p = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
        }
        session_destroy();
        self::$started = false;
    }

    /** Regenerate session ID (call after login) */
    public static function regenerate(): void
    {
        self::start();
        session_regenerate_id(true);
    }
}
