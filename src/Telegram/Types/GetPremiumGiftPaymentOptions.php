<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns available options for gifting Telegram Premium to a user.
 */
class GetPremiumGiftPaymentOptions extends PremiumGiftPaymentOptions implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPremiumGiftPaymentOptions',
        ];
    }
}
