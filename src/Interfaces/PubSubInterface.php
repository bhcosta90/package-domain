<?php

declare(strict_types=1);

namespace Core\Shared\Interfaces;

interface PubSubInterface
{
    public function name(): void;

    public function publish(): void;

    public function subscribe(array $data): void;
}
