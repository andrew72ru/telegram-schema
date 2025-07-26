<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InviteLinkChatType types
 */
abstract class InviteLinkChatType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
