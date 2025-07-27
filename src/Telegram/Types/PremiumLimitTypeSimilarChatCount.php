<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of received similar chats.
 */
class PremiumLimitTypeSimilarChatCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeSimilarChatCount',
        ];
    }
}
