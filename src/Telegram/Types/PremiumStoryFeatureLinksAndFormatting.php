<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The ability to use links and formatting in story caption, and use inputStoryAreaTypeLink areas
 */
class PremiumStoryFeatureLinksAndFormatting extends PremiumStoryFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumStoryFeatureLinksAndFormatting',
        ];
    }
}
