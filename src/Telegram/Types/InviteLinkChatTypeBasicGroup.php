<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is an invite link for a basic group.
 */
class InviteLinkChatTypeBasicGroup extends InviteLinkChatType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inviteLinkChatTypeBasicGroup',
        ];
    }
}
