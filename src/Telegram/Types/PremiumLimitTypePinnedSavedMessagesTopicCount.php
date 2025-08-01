<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of pinned Saved Messages topics.
 */
class PremiumLimitTypePinnedSavedMessagesTopicCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypePinnedSavedMessagesTopicCount',
        ];
    }
}
