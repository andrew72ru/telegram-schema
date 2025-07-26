<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes privacy settings for new chat creation; can be used only if getOption("can_set_new_chat_privacy_settings") @settings New settings
 */
class SetNewChatPrivacySettings extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('settings')]
        private NewChatPrivacySettings|null $settings = null,
    ) {
    }

    public function getSettings(): NewChatPrivacySettings|null
    {
        return $this->settings;
    }

    public function setSettings(NewChatPrivacySettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setNewChatPrivacySettings',
            'settings' => $this->getSettings(),
        ];
    }
}
