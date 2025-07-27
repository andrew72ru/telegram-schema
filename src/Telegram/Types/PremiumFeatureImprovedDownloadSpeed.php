<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Improved download speed.
 */
class PremiumFeatureImprovedDownloadSpeed extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureImprovedDownloadSpeed',
        ];
    }
}
