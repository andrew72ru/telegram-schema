<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns contacts of the user
 */
class ChatMembersFilterContacts extends ChatMembersFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMembersFilterContacts',
        ];
    }
}
