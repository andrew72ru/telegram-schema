<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to show an emoji status along with the business name.
 */
class BusinessFeatureEmojiStatus extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureEmojiStatus',
        ];
    }
}
