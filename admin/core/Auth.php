<?php
/**
 * Auth — Authentication helper
 */
class Auth
{
    /** Attempt login with email and password */
    public static function attempt(string $email, string $password): bool
    {
        $db = Database::getInstance();
        $admin = $db->fetch("SELECT * FROM admins WHERE email = ? AND status = 1 LIMIT 1", [$email]);

        if ($admin && password_verify($password, $admin['password'])) {
            Session::regenerate();
            Session::set('admin_id', $admin['id']);
            Session::set('admin_name', $admin['name']);
            Session::set('admin_email', $admin['email']);
            Session::set('admin_avatar', $admin['avatar']);
            Session::set('logged_in', true);
            Session::set('login_time', time());
            return true;
        }
        return false;
    }

    /** Check if user is authenticated */
    public static function check(): bool
    {
        return Session::get('logged_in') === true && Session::has('admin_id');
    }

    /** Get current admin ID */
    public static function id(): ?int
    {
        return Session::get('admin_id');
    }

    /** Get current admin name */
    public static function name(): ?string
    {
        return Session::get('admin_name');
    }

    /** Get current admin email */
    public static function email(): ?string
    {
        return Session::get('admin_email');
    }

    /** Get current admin avatar */
    public static function avatar(): ?string
    {
        return Session::get('admin_avatar');
    }

    /** Get admin initials for avatar fallback */
    public static function initials(): string
    {
        $name = self::name() ?? 'A';
        $parts = explode(' ', $name);
        $initials = strtoupper($parts[0][0] ?? 'A');
        if (isset($parts[1])) $initials .= strtoupper($parts[1][0]);
        return $initials;
    }

    /** Logout — destroy session */
    public static function logout(): void
    {
        Session::destroy();
    }

    /** Require authentication — redirect to login if not logged in */
    public static function requireLogin(): void
    {
        if (!self::check()) {
            Session::flash('error', 'Please log in to continue.');
            header('Location: login');
            exit;
        }
    }

    /** Update password */
    public static function updatePassword(int $adminId, string $newPassword): bool
    {
        $db = Database::getInstance();
        $hash = password_hash($newPassword, PASSWORD_BCRYPT);
        return $db->execute("UPDATE admins SET password = ? WHERE id = ?", [$hash, $adminId]) > 0;
    }
}
