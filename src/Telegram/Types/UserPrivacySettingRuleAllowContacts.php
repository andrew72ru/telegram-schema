<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A rule to allow all contacts of the user to do something.
 */
class UserPrivacySettingRuleAllowContacts extends UserPrivacySettingRule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleAllowContacts',
        ];
    }
}
