<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Suggests the user to extend their expiring Telegram Star subscriptions. Call getStarSubscriptions with only_expiring == true
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
