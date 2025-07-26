<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PublicChatType types
 */
abstract class PublicChatType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
