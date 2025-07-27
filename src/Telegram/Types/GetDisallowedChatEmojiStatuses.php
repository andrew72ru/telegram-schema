<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the list of emoji statuses, which can't be used as chat emoji status, even if they are from a sticker set with is_allowed_as_chat_emoji_status == true.
 */
class GetDisallowedChatEmojiStatuses extends EmojiStatusCustomEmojis implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDisallowedChatEmojiStatuses',
        ];
    }
}
