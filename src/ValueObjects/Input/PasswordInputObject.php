<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects\Input;

use Core\Shared\Validations\DomainValidation;

class PasswordInputObject
{
    public function __construct(public ?string $value, $convert = true, $acceptNull = false, $field = null)
    {
        if ($convert) {

            $message = null;
            if (!empty($field)) {
                $message = "The value {$field} at between 3 and 100 characters";
            }

            if ($acceptNull) {
                DomainValidation::strCanNullAndBetweenLength($value, 6, 18, $message);
            } else {
                DomainValidation::strBetweenLength($value, 6, 18, $message);
            }
            if (!empty($this->value)) {
                $this->value = password_hash($this->value, PASSWORD_DEFAULT);
            }
        }
    }
}
