<?php

declare(strict_types=1);

namespace Core\Shared\Support\DTO\ParcelCalculate;

use DateTime;

class Output
{
    public function __construct(
        public DateTime $date,
        public float $value,
    ) {
        //
    }
}
