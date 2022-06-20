<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects;

class DeleteObject
{
    public function __construct(
        public bool $success
    ) {
        //
    }
}
