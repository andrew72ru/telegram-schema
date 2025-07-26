<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user or the chat is not a chat member
 */
class ChatMemberStatusLeft extends ChatMemberStatus implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMemberStatusLeft',
        ];
    }
}
