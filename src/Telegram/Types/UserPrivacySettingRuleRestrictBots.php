<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A rule to restrict all bots from doing something.
 */
class UserPrivacySettingRuleRestrictBots extends UserPrivacySettingRule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleRestrictBots',
        ];
    }
}
