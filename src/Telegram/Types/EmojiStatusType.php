<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for EmojiStatusType types
 */
abstract class EmojiStatusType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
