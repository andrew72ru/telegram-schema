<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatActionBar types
 */
abstract class ChatActionBar implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
