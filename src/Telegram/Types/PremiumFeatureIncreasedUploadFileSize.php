<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Increased maximum upload file size
 */
class PremiumFeatureIncreasedUploadFileSize extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureIncreasedUploadFileSize',
        ];
    }
}
