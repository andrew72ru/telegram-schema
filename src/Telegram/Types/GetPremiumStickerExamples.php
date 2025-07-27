<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns examples of premium stickers for demonstration purposes.
 */
class GetPremiumStickerExamples extends Stickers implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPremiumStickerExamples',
        ];
    }
}
