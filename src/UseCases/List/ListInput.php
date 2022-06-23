<?php

declare(strict_types=1);

namespace Core\Shared\UseCases\List;

class ListInput
{
    public function __construct(
        public ?array $filter = null,
        public ?int $total = 25,
        public ?int $page = 1,
    ) {
        //
    }
}
