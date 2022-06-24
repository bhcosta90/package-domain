<?php

declare(strict_types=1);

namespace Core\Shared\UseCases\Delete;

class DeleteOutput
{
    public function __construct(
        public bool $success
    ) {
        //
    }
}
