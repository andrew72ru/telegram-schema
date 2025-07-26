<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The ability to set opening hours
 */
class BusinessFeatureOpeningHours extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureOpeningHours',
        ];
    }
}
