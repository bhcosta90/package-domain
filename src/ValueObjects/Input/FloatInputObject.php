<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects\Input;

use Core\Shared\Validations\DomainValidation;

class FloatInputObject
{
    public function __construct(public ?float $value, $acceptNull = false, $field = null)
    {
        $message = null;
        if (!empty($field)) {
            $message = "The value {$field} at between 3 and 255 characters";
        }

        if ($acceptNull) {
            DomainValidation::floatCanNullAndMin($value, 0.01, $message);
        } else {
            DomainValidation::floatMin($value, 0.01, $message);
        }
    }
}
