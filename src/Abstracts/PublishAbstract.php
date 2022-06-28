<?php

declare(strict_types=1);

namespace Core\Shared\Abstracts;

abstract class PublishAbstract
{
    public abstract function name(): string;

    public abstract function publish(): array;
}
