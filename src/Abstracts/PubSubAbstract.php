<?php

declare(strict_types=1);

namespace Core\Shared\Abstracts;

abstract class PubSubAbstract
{
    public abstract function name(): string;

    public abstract function publish(): array;

    public abstract function subscribe(array $data): void;
}
