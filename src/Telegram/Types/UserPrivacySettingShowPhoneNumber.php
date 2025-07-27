<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A privacy setting for managing whether the user's phone number is visible.
 */
class UserPrivacySettingShowPhoneNumber extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingShowPhoneNumber',
        ];
    }
}
