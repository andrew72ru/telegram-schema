<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The link is an invite link for a channel.
 */
class InviteLinkChatTypeChannel extends InviteLinkChatType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inviteLinkChatTypeChannel',
        ];
    }
}
