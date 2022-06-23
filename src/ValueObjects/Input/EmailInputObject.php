<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects\Input;

use Core\Shared\Validations\DomainValidation;

class EmailInputObject
{
    public function __construct(public ?string $value, $acceptNull = false, $field = null)
    {
        $message = null;
        if (!empty($field)) {
            $message = "The value {$field} at between 3 and 100 characters";
        }

        if ($acceptNull) {
            DomainValidation::emailCanNull($value, $message);
        } else {
            DomainValidation::email($value, 3, $message);
        }
    }
}
