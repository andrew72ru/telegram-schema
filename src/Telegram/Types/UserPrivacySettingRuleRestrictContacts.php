<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A rule to restrict all contacts of the user from doing something.
 */
class UserPrivacySettingRuleRestrictContacts extends UserPrivacySettingRule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleRestrictContacts',
        ];
    }
}
