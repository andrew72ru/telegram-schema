<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MessageContent types
 */
abstract class MessageContent implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
