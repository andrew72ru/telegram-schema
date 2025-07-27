<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Autosave settings applied to all basic group and supergroup chats without chat-specific settings.
 */
class AutosaveSettingsScopeGroupChats extends AutosaveSettingsScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'autosaveSettingsScopeGroupChats',
        ];
    }
}
