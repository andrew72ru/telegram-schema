<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A privacy setting for managing whether the user can be invited to chats
 */
class UserPrivacySettingAllowChatInvites extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingAllowChatInvites',
        ];
    }
}
