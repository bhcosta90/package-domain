<?php

declare(strict_types=1);

namespace Core\Shared\Validations;

class DomainValidation
{
    public static function notNull(string $value, string $exceptionMessage = null)
    {
        if (empty($value)) {
            throw new Exceptions\DomainValidationException($exceptionMessage ?? "Should not be empty value");
        }
    }

    public static function strCanNullAndMaxLength(string|null $value, int $length = 255, string $exceptionMessage = null)
    {
        !is_null($value) && !empty($value) && self::strMaxLength($value, $length, $exceptionMessage);
    }

    public static function strCanNullAndMinLength(string|null $value, int $length = 2, string $exceptionMessage = null)
    {
        !is_null($value) && !empty($value) && self::strMinLength($value, $length, $exceptionMessage);
    }

    public static function strCanNullAndBetweenLength(string|null $value, int $min = 2, int $max = 255, string $exceptionMessage = null)
    {
        !is_null($value) && !empty($value) && self::strBetweenLength($value, $min, $max, $exceptionMessage);
    }

    public static function strMaxLength(string $value, int $length = 255, string $exceptionMessage = null)
    {
        if (strlen($value) > $length) {
            throw new Exceptions\DomainValidationException($exceptionMessage ?? "The value must not be greater than {$length} characters");
        }
    }

    public static function strMinLength(string $value, int $length = 2, string $exceptionMessage = null)
    {
        if (strlen($value) < $length) {
            throw new Exceptions\DomainValidationException($exceptionMessage ?? "The value must at least {$length} characters");
        }
    }

    public static function strBetweenLength(string $value, int $min = 2, int $max = 255, string $exceptionMessage = null)
    {
        if (strlen($value) < $min && strlen($value) > $max) {
            throw new Exceptions\DomainValidationException($exceptionMessage ?? "The value must at between {$min} and {$max} characters");
        }
    }

    public static function numericCanNullAndMin(null|int $number, int $min = 0, $exceptionMessage = null)
    {
        if ($number && $number < $min) {
            self::numericMin($number, $min, $exceptionMessage);
        }
    }

    public static function numericMin(int $number, int $min = 0, $exceptionMessage = null)
    {
        if ($number < $min) {
            throw new Exceptions\DomainValidationException($exceptionMessage ?? "The value must at least {$min} numeric");
        }
    }

    public static function floatCanNullAndMin(null|float $number, float $min = 0, $exceptionMessage = null)
    {
        if ($number && $number < $min) {
            self::floatMin($number, $min, $exceptionMessage);
        }
    }

    public static function floatMin(float $number, float $min = 0, $exceptionMessage = null)
    {
        if ($number < $min) {
            throw new Exceptions\DomainValidationException($exceptionMessage ?? "The value must at least {$min} numeric");
        }
    }

    public static function emailCanNull(?string $email, $exceptionMessage = null)
    {
        if ($email) {
            self::email($email, $exceptionMessage);
        }
    }

    public static function email(string $email, $exceptionMessage = null)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exceptions\DomainValidationException($exceptionMessage ?? "the value must be a valid email");
        }
    }
}
