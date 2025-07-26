<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The category contains premium stickers that must be found by getPremiumStickers
 */
class EmojiCategorySourcePremium extends EmojiCategorySource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategorySourcePremium',
        ];
    }
}
