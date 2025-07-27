<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A privacy setting for managing whether the user's profile photo is visible.
 */
class UserPrivacySettingShowProfilePhoto extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingShowProfilePhoto',
        ];
    }
}
