<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of suggested reaction areas on a story.
 */
class PremiumLimitTypeStorySuggestedReactionAreaCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeStorySuggestedReactionAreaCount',
        ];
    }
}
