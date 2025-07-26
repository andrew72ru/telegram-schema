<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A privacy setting for managing whether received gifts are automatically shown on the user's profile page
 */
class UserPrivacySettingAutosaveGifts extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingAutosaveGifts',
        ];
    }
}
