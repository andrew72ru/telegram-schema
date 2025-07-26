<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns users under certain restrictions in the chat; can be used only by administrators in a supergroup
 */
class ChatMembersFilterRestricted extends ChatMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMembersFilterRestricted',
        ];
    }
}
