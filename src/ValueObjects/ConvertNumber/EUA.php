<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects\ConvertNumber;

class EUA
{
    public function __construct(private ?string $value)
    {
        //
    }

    public function __toString()
    {
        $value = str_replace('.', '', $this->value);
        return str_replace(',', '.', $value);
    }
}
