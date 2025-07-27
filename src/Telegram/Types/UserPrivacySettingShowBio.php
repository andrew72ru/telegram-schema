<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A privacy setting for managing whether the user's bio is visible.
 */
class UserPrivacySettingShowBio extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingShowBio',
        ];
    }
}
