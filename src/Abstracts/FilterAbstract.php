<?php

declare(strict_types=1);

namespace Core\Shared\Abstracts;

abstract class FilterAbstract
{
    public abstract function handle(): array;
}
