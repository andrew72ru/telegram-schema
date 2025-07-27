<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes settings for gift receiving of a business account; for bots only.
 */
class SetBusinessAccountGiftSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The new settings */
        #[SerializedName('settings')]
        private GiftSettings|null $settings = null,
    ) {
    }

    /**
     * Get Unique identifier of business connection.
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection.
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get The new settings.
     */
    public function getSettings(): GiftSettings|null
    {
        return $this->settings;
    }

    /**
     * Set The new settings.
     */
    public function setSettings(GiftSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessAccountGiftSettings',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'settings' => $this->getSettings(),
        ];
    }
}
