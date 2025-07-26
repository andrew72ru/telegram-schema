<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns up to 8 emoji statuses, which must be shown in the emoji status list for chats
 */
class GetThemedChatEmojiStatuses extends EmojiStatusCustomEmojis implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getThemedChatEmojiStatuses',
        ];
    }
}
