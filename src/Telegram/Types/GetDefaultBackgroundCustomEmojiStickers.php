<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns default list of custom emoji stickers for reply background
 */
class GetDefaultBackgroundCustomEmojiStickers extends Stickers implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getDefaultBackgroundCustomEmojiStickers',
        ];
    }
}
