<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum length of captions of posted stories.
 */
class PremiumLimitTypeStoryCaptionLength extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeStoryCaptionLength',
        ];
    }
}
