<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatAvailableReactions types
 */
abstract class ChatAvailableReactions implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
