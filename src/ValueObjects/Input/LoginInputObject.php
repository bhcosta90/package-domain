<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects\Input;

use Core\Shared\Validations\DomainValidation;

class LoginInputObject
{
    public function __construct(public ?string $value, $acceptNull = false, $field = null)
    {
        $message = null;
        if (!empty($field)) {
            $message = "The value {$field} at between 3 and 100 characters";
        }

        if ($acceptNull) {
            DomainValidation::strCanNullAndBetweenLength($value, 3, 100, $message);
        } else {
            DomainValidation::strBetweenLength($value, 3, 100, $message);
        }
    }
}
