<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns up to 8 emoji statuses, which must be shown right after the default Premium Badge in the emoji status list for self status
 */
class GetThemedEmojiStatuses extends EmojiStatusCustomEmojis implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getThemedEmojiStatuses',
        ];
    }
}
