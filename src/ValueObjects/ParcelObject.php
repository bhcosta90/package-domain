<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects;

class ParcelObject
{
    public function __construct(
        public int $parcel,
        public int $total,
    ) {
        //
    }
}
