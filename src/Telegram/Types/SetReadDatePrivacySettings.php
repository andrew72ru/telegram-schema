<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes privacy settings for message read date @settings New settings.
 */
class SetReadDatePrivacySettings extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('settings')]
        private ReadDatePrivacySettings|null $settings = null,
    ) {
    }

    public function getSettings(): ReadDatePrivacySettings|null
    {
        return $this->settings;
    }

    public function setSettings(ReadDatePrivacySettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setReadDatePrivacySettings',
            'settings' => $this->getSettings(),
        ];
    }
}
