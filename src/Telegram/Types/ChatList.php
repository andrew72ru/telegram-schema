<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatList types.
 */
abstract class ChatList implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
