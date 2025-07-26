<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Suggests the user to upgrade the Premium subscription from monthly payments to annual payments
 */
class SuggestedActionUpgradePremium extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionUpgradePremium',
        ];
    }
}
