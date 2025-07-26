<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is an invite link for a channel
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
