<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to extend their expiring Telegram Star subscriptions. Call getStarSubscriptions with only_expiring == true.
 */
class SuggestedActionExtendStarSubscriptions extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionExtendStarSubscriptions',
        ];
    }
}
