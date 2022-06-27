<?php

declare(strict_types=1);

namespace Core\Shared\Support\DTO\ParcelCalculate;

use DateTime;

class Input
{
    public function __construct(
        public int $total,
        public float $value,
        public DateTime $date,
    ) {
        //
    }
}
