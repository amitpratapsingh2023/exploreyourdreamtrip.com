<?php
/**
 * CSRF — Cross-Site Request Forgery protection
 */
class CSRF
{
    private static string $tokenKey = '_csrf_token';

    /** Generate or retrieve the current CSRF token */
    public static function token(): string
    {
        Session::start();
        if (!Session::has(self::$tokenKey)) {
            Session::set(self::$tokenKey, bin2hex(random_bytes(32)));
        }
        return Session::get(self::$tokenKey);
    }

    /** Output a hidden input field with the CSRF token */
    public static function field(): string
    {
        return '<input type="hidden" name="_csrf_token" value="' . htmlspecialchars(self::token()) . '">';
    }

    /** Validate the token from the request */
    public static function validate(?string $token = null): bool
    {
        $token = $token ?? ($_POST['_csrf_token'] ?? $_GET['_csrf_token'] ?? '');
        $sessionToken = Session::get(self::$tokenKey, '');

        if (empty($token) || empty($sessionToken)) return false;

        return hash_equals($sessionToken, $token);
    }

    /** Validate and abort with 403 if invalid */
    public static function validateOrDie(): void
    {
        if (!self::validate()) {
            http_response_code(403);
            Session::flash('error', 'Invalid security token. Please try again.');
            header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'dashboard'));
            exit;
        }
    }

    /** Regenerate token (call after successful form submission) */
    public static function regenerate(): string
    {
        $token = bin2hex(random_bytes(32));
        Session::set(self::$tokenKey, $token);
        return $token;
    }
}
