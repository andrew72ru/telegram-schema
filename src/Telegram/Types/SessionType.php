<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for SessionType types.
 */
abstract class SessionType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
