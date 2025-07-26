<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes settings for gift receiving for the current user @settings The new settings
 */
class SetGiftSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('settings')]
        private GiftSettings|null $settings = null,
    ) {
    }

    public function getSettings(): GiftSettings|null
    {
        return $this->settings;
    }

    public function setSettings(GiftSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setGiftSettings',
            'settings' => $this->getSettings(),
        ];
    }
}
