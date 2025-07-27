<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of created public chats.
 */
class PremiumLimitTypeCreatedPublicChatCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeCreatedPublicChatCount',
        ];
    }
}
