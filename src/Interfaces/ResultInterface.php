<?php

declare(strict_types=1);

namespace Core\Shared\Interfaces;

interface ResultInterface
{
    /**
     * @return stdClass[]
     */
    public function items(): array;
}
