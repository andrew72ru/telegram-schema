<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat is a recently created group chat to which new members can be invited.
 */
class ChatActionBarInviteMembers extends ChatActionBar implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionBarInviteMembers',
        ];
    }
}
