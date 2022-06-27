<?php

declare(strict_types=1);

namespace Core\Shared\Traits;

trait EnumTrait
{
    public static function toArray(): array
    {
        return array_map(
            fn (self $type) => $type->value,
            self::cases()
        );
    }
}
