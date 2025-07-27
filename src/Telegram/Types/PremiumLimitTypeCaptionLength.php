<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum length of sent media caption.
 */
class PremiumLimitTypeCaptionLength extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeCaptionLength',
        ];
    }
}
