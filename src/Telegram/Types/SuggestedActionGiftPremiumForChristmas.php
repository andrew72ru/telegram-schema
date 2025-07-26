<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Suggests the user to gift Telegram Premium to friends for Christmas
 */
class SuggestedActionGiftPremiumForChristmas extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionGiftPremiumForChristmas',
        ];
    }
}
