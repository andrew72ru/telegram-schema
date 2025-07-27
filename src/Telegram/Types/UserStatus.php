<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for UserStatus types.
 */
abstract class UserStatus implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
