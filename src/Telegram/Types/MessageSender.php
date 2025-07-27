<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MessageSender types.
 */
abstract class MessageSender implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
