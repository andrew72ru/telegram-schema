<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Autosave settings applied to all private chats without chat-specific settings
 */
class AutosaveSettingsScopePrivateChats extends AutosaveSettingsScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'autosaveSettingsScopePrivateChats',
        ];
    }
}
