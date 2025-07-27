<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatMembersFilter types.
 */
abstract class ChatMembersFilter implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
