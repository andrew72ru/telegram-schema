<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of active stories.
 */
class PremiumLimitTypeActiveStoryCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeActiveStoryCount',
        ];
    }
}
