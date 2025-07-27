<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to gift Telegram Premium to friends for Christmas.
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
