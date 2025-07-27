<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is an invite link for a supergroup.
 */
class InviteLinkChatTypeSupergroup extends InviteLinkChatType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inviteLinkChatTypeSupergroup',
        ];
    }
}
