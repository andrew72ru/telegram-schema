<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Allowed to use many additional features for stories.
 */
class BusinessFeatureUpgradedStories extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureUpgradedStories',
        ];
    }
}
