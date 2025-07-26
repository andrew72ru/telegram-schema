<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Ability to change position of the main chat list, archive and mute all new chats from non-contacts, and completely disable notifications about the user's contacts joined Telegram
 */
class PremiumFeatureAdvancedChatManagement extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureAdvancedChatManagement',
        ];
    }
}
