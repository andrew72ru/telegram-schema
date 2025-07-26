<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Autosave settings applied to all channel chats without chat-specific settings
 */
class AutosaveSettingsScopeChannelChats extends AutosaveSettingsScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'autosaveSettingsScopeChannelChats',
        ];
    }
}
