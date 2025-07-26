<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A privacy setting for managing whether a link to the user's account is included in forwarded messages
 */
class UserPrivacySettingShowLinkInForwardedMessages extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingShowLinkInForwardedMessages',
        ];
    }
}
