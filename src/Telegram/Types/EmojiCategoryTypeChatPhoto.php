<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The category must be used for chat photo emoji selection
 */
class EmojiCategoryTypeChatPhoto extends EmojiCategoryType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategoryTypeChatPhoto',
        ];
    }
}
