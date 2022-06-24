<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects;

class EntityObject
{
    public function __construct(
        public int|string $id,
        public string|object $type,
        public string $value,
    ) {
        if (gettype($this->type) === 'object') {
            $this->type = get_class($this->type);
        }
    }
}
