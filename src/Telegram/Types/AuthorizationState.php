<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for AuthorizationState types.
 */
abstract class AuthorizationState implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
