<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects\ConvertNumber;

class NumberBr
{
    public function __construct(private ?float $value, private int $decimal = 2, private bool $onlyGreaterZero = false)
    {
        //
    }

    public function __toString()
    {
        $number = $this->value;

        if ($this->onlyGreaterZero) {
            $number = abs($number);
        }
        return number_format($number, $this->decimal, ',', '.');
    }
}
