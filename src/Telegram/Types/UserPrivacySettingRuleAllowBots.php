<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A rule to allow all bots to do something
 */
class UserPrivacySettingRuleAllowBots extends UserPrivacySettingRule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleAllowBots',
        ];
    }
}
