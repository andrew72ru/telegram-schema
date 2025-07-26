<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for UserType types
 */
abstract class UserType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
