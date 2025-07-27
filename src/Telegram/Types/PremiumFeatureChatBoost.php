<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to boost chats.
 */
class PremiumFeatureChatBoost extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureChatBoost',
        ];
    }
}
