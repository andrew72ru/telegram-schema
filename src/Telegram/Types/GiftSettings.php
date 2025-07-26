<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains settings for gift receiving for a user
 */
class GiftSettings implements \JsonSerializable
{
    public function __construct(
        /** True, if a button for sending a gift to the user or by the user must always be shown in the input field */
        #[SerializedName('show_gift_button')]
        private bool $showGiftButton,
        /** Types of gifts accepted by the user; for Telegram Premium users only */
        #[SerializedName('accepted_gift_types')]
        private AcceptedGiftTypes|null $acceptedGiftTypes = null,
    ) {
    }

    /**
     * Get True, if a button for sending a gift to the user or by the user must always be shown in the input field
     */
    public function getShowGiftButton(): bool
    {
        return $this->showGiftButton;
    }

    /**
     * Set True, if a button for sending a gift to the user or by the user must always be shown in the input field
     */
    public function setShowGiftButton(bool $showGiftButton): self
    {
        $this->showGiftButton = $showGiftButton;

        return $this;
    }

    /**
     * Get Types of gifts accepted by the user; for Telegram Premium users only
     */
    public function getAcceptedGiftTypes(): AcceptedGiftTypes|null
    {
        return $this->acceptedGiftTypes;
    }

    /**
     * Set Types of gifts accepted by the user; for Telegram Premium users only
     */
    public function setAcceptedGiftTypes(AcceptedGiftTypes|null $acceptedGiftTypes): self
    {
        $this->acceptedGiftTypes = $acceptedGiftTypes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giftSettings',
            'show_gift_button' => $this->getShowGiftButton(),
            'accepted_gift_types' => $this->getAcceptedGiftTypes(),
        ];
    }
}
