<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes settings for automatic moving of chats to and from the Archive chat lists @settings New settings.
 */
class SetArchiveChatListSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('settings')]
        private ArchiveChatListSettings|null $settings = null,
    ) {
    }

    public function getSettings(): ArchiveChatListSettings|null
    {
        return $this->settings;
    }

    public function setSettings(ArchiveChatListSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setArchiveChatListSettings',
            'settings' => $this->getSettings(),
        ];
    }
}
