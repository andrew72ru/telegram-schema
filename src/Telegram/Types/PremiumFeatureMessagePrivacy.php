<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to disallow incoming voice and video note messages in private chats using setUserPrivacySettingRules with userPrivacySettingAllowPrivateVoiceAndVideoNoteMessages.
 */
class PremiumFeatureMessagePrivacy extends PremiumFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumFeatureMessagePrivacy',
        ];
    }
}
