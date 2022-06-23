<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects\Input;

use Core\Shared\Validations\DomainValidation;

class NameInputObject
{
    public function __construct(public ?string $value, $acceptNull = false, $field = null)
    {
        $message = null;
        if (!empty($field)) {
            $message = "The value {$field} at between 3 and 255 characters";
        }

        if ($acceptNull) {
            DomainValidation::strCanNullAndBetweenLength($value, 3, 255, $message);
        } else {
            DomainValidation::strBetweenLength($value, 3, 255, $message);
        }
    }
}
