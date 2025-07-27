<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to subscribe to the Premium subscription with annual payments.
 */
class SuggestedActionSubscribeToAnnualPremium extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionSubscribeToAnnualPremium',
        ];
    }
}
