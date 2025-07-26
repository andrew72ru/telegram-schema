<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A privacy setting for managing whether peer-to-peer connections can be used for calls
 */
class UserPrivacySettingAllowPeerToPeerCalls extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingAllowPeerToPeerCalls',
        ];
    }
}
