<?php

declare(strict_types=1);

namespace Core\Shared\Abstracts;

abstract class PubSubAbstract
{
    public abstract function name(): void;

    public abstract function publish(): void;

    public abstract function subscribe(array $data): void;
}
