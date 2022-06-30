<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects\Input;

use Core\Shared\Validations\DomainValidation;

class IntInputObject
{
    public function __construct(public ?int $value, $acceptNull = false, $field = null)
    {
        $message = null;
        if (!empty($field)) {
            $message = "The value {$field} at between 3 and 255 characters";
        }

        if ($acceptNull) {
            DomainValidation::numericCanNullAndMin($value, 0, $message);
        } else {
            DomainValidation::numericMin($value, 0, $message);
        }
    }
}
