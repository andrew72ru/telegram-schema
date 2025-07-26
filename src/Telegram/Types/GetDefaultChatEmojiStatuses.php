<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns default emoji statuses for chats
 */
class GetDefaultChatEmojiStatuses extends EmojiStatusCustomEmojis implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDefaultChatEmojiStatuses',
        ];
    }
}
