<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A rule to allow all Premium Users to do something; currently, allowed only for userPrivacySettingAllowChatInvites.
 */
class UserPrivacySettingRuleAllowPremiumUsers extends UserPrivacySettingRule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleAllowPremiumUsers',
        ];
    }
}
