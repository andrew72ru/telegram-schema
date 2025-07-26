<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns bot members of the chat
 */
class ChatMembersFilterBots extends ChatMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMembersFilterBots',
        ];
    }
}
