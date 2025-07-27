<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to save other's unprotected stories.
 */
class PremiumStoryFeatureSaveStories extends PremiumStoryFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumStoryFeatureSaveStories',
        ];
    }
}
