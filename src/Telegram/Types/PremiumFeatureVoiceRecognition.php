<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to convert voice notes to text.
 */
class PremiumFeatureVoiceRecognition extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureVoiceRecognition',
        ];
    }
}
