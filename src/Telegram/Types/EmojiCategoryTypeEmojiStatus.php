<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The category must be used for emoji status selection
 */
class EmojiCategoryTypeEmojiStatus extends EmojiCategoryType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategoryTypeEmojiStatus',
        ];
    }
}
