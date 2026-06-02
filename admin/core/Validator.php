<?php
/**
 * Validator — Server-side input validation
 */
class Validator
{
    private array $data;
    private array $errors = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /** Run validation rules — returns true if valid */
    public function validate(array $rules): bool
    {
        foreach ($rules as $field => $ruleSet) {
            $ruleList = is_string($ruleSet) ? explode('|', $ruleSet) : $ruleSet;
            $value = $this->data[$field] ?? null;
            $label = ucfirst(str_replace('_', ' ', $field));

            foreach ($ruleList as $rule) {
                $params = [];
                if (strpos($rule, ':') !== false) {
                    [$rule, $paramStr] = explode(':', $rule, 2);
                    $params = explode(',', $paramStr);
                }

                $method = 'rule' . ucfirst($rule);
                if (method_exists($this, $method)) {
                    $this->$method($field, $value, $label, $params);
                }
            }
        }
        return empty($this->errors);
    }

    /** Get all errors */
    public function errors(): array
    {
        return $this->errors;
    }

    /** Get first error for a field */
    public function error(string $field): ?string
    {
        return $this->errors[$field][0] ?? null;
    }

    /** Check if field has error */
    public function hasError(string $field): bool
    {
        return isset($this->errors[$field]);
    }

    /** Get first error message overall */
    public function firstError(): ?string
    {
        foreach ($this->errors as $fieldErrors) {
            return $fieldErrors[0] ?? null;
        }
        return null;
    }

    // ─── Validation Rules ──────────────────────────────────────

    private function ruleRequired(string $field, mixed $value, string $label, array $params): void
    {
        if ($value === null || $value === '' || (is_array($value) && empty($value))) {
            $this->errors[$field][] = "{$label} is required.";
        }
    }

    private function ruleEmail(string $field, mixed $value, string $label, array $params): void
    {
        if (!empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = "{$label} must be a valid email address.";
        }
    }

    private function ruleMin(string $field, mixed $value, string $label, array $params): void
    {
        $min = (int)($params[0] ?? 0);
        if (!empty($value) && strlen($value) < $min) {
            $this->errors[$field][] = "{$label} must be at least {$min} characters.";
        }
    }

    private function ruleMax(string $field, mixed $value, string $label, array $params): void
    {
        $max = (int)($params[0] ?? 255);
        if (!empty($value) && strlen($value) > $max) {
            $this->errors[$field][] = "{$label} must not exceed {$max} characters.";
        }
    }

    private function ruleUnique(string $field, mixed $value, string $label, array $params): void
    {
        if (empty($value)) return;
        $table = $params[0] ?? '';
        $column = $params[1] ?? $field;
        $exceptId = $params[2] ?? null;

        $db = Database::getInstance();
        $sql = "SELECT COUNT(*) FROM {$table} WHERE {$column} = ?";
        $bindings = [$value];

        if ($exceptId) {
            $sql .= " AND id != ?";
            $bindings[] = $exceptId;
        }

        $count = $db->fetchColumn($sql, $bindings);
        if ($count > 0) {
            $this->errors[$field][] = "{$label} already exists.";
        }
    }

    private function ruleSlug(string $field, mixed $value, string $label, array $params): void
    {
        if (!empty($value) && !preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $value)) {
            $this->errors[$field][] = "{$label} must be a valid slug (lowercase, hyphens only).";
        }
    }

    private function ruleUrl(string $field, mixed $value, string $label, array $params): void
    {
        if (!empty($value) && !filter_var($value, FILTER_VALIDATE_URL)) {
            $this->errors[$field][] = "{$label} must be a valid URL.";
        }
    }

    private function ruleIn(string $field, mixed $value, string $label, array $params): void
    {
        if (!empty($value) && !in_array($value, $params)) {
            $this->errors[$field][] = "{$label} must be one of: " . implode(', ', $params);
        }
    }

    private function ruleNumeric(string $field, mixed $value, string $label, array $params): void
    {
        if (!empty($value) && !is_numeric($value)) {
            $this->errors[$field][] = "{$label} must be a number.";
        }
    }

    private function ruleImage(string $field, mixed $value, string $label, array $params): void
    {
        if (empty($_FILES[$field]['name'])) return;
        $file = $_FILES[$field];
        $allowed = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $maxSize = (int)($params[0] ?? 1) * 1024 * 1024; // MB

        if (!in_array($file['type'], $allowed)) {
            $this->errors[$field][] = "{$label} must be an image (JPEG, PNG, GIF, WebP).";
        }
        if ($file['size'] > $maxSize) {
            $this->errors[$field][] = "{$label} must not exceed " . ($params[0] ?? 1) . "MB.";
        }
    }

    private function ruleConfirmed(string $field, mixed $value, string $label, array $params): void
    {
        $confirmField = $field . '_confirmation';
        if (!empty($value) && ($this->data[$confirmField] ?? '') !== $value) {
            $this->errors[$field][] = "{$label} confirmation does not match.";
        }
    }
}
