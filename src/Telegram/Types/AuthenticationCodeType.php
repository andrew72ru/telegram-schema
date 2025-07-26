<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for AuthenticationCodeType types
 */
abstract class AuthenticationCodeType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
