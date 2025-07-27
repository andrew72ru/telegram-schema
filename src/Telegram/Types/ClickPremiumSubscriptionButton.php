<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Informs TDLib that the user clicked Premium subscription button on the Premium features screen.
 */
class ClickPremiumSubscriptionButton extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clickPremiumSubscriptionButton',
        ];
    }
}
