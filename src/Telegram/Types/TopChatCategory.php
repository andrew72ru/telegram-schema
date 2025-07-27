<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for TopChatCategory types.
 */
abstract class TopChatCategory implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
