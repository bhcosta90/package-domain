<?php

declare(strict_types=1);

namespace Core\Shared\ValueObjects;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid as RamseyUuid;

class UuidObject
{
    public function __construct(
        protected string $value
    ) {
        $this->ensureIsValid($value);
    }

    private function ensureIsValid(string $id)
    {
        if (!RamseyUuid::isValid($id)) {
            throw new InvalidArgumentException(sprintf("<%s> does not allow the value <%s>", static::class, $id));
        }
    }

    public static function random(): self
    {
        return new self((string) RamseyUuid::uuid4());
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
