<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to use tags in Saved Messages.
 */
class PremiumFeatureSavedMessagesTags extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureSavedMessagesTags',
        ];
    }
}
