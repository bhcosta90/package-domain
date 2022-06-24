<?php

declare(strict_types=1);

namespace Core\Shared\UseCases\Find;

class FindInput
{
    public function __construct(
        public string $id,
    ) {
        //
    }
}
