<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MessageSendingState types.
 */
abstract class MessageSendingState implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
