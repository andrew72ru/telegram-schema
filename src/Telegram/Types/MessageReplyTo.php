<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MessageReplyTo types
 */
abstract class MessageReplyTo implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
