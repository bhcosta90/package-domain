<?php

declare(strict_types=1);

namespace Core\Shared\UseCases\Delete;

class DeleteInput
{
    public function __construct(
        public string $id,
    ) {
        //
    }
}
