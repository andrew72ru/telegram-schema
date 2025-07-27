<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to hide the fact that the user viewed other's stories.
 */
class PremiumStoryFeatureStealthMode extends PremiumStoryFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumStoryFeatureStealthMode',
        ];
    }
}
