<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ConnectionState types
 */
abstract class ConnectionState implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
