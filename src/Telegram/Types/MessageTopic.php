<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MessageTopic types.
 */
abstract class MessageTopic implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
