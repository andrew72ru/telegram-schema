<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of pinned chats in the main chat list.
 */
class PremiumLimitTypePinnedChatCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypePinnedChatCount',
        ];
    }
}
