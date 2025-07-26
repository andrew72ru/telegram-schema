<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatMemberStatus types
 */
abstract class ChatMemberStatus implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
