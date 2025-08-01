<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A privacy setting for managing whether the user can receive voice and video messages in private chats; for Telegram Premium users only.
 */
class UserPrivacySettingAllowPrivateVoiceAndVideoNoteMessages extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingAllowPrivateVoiceAndVideoNoteMessages',
        ];
    }
}
