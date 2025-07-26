<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets auto-download settings @settings New user auto-download settings @type Type of the network for which the new settings are relevant
 */
class SetAutoDownloadSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('settings')]
        private AutoDownloadSettings|null $settings = null,
        #[SerializedName('type')]
        private NetworkType|null $type = null,
    ) {
    }

    public function getSettings(): AutoDownloadSettings|null
    {
        return $this->settings;
    }

    public function setSettings(AutoDownloadSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function getType(): NetworkType|null
    {
        return $this->type;
    }

    public function setType(NetworkType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setAutoDownloadSettings',
            'settings' => $this->getSettings(),
            'type' => $this->getType(),
        ];
    }
}
