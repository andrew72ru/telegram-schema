<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether a gift is shown on the current user's or the channel's profile page; requires can_post_messages administrator right in the channel chat.
 */
class ToggleGiftIsSaved extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** Pass true to display the gift on the user's or the channel's profile page; pass false to remove it from the profile page */
        #[SerializedName('is_saved')]
        private bool $isSaved,
    ) {
    }

    /**
     * Get Identifier of the gift.
     */
    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    /**
     * Set Identifier of the gift.
     */
    public function setReceivedGiftId(string $receivedGiftId): self
    {
        $this->receivedGiftId = $receivedGiftId;

        return $this;
    }

    /**
     * Get Pass true to display the gift on the user's or the channel's profile page; pass false to remove it from the profile page.
     */
    public function getIsSaved(): bool
    {
        return $this->isSaved;
    }

    /**
     * Set Pass true to display the gift on the user's or the channel's profile page; pass false to remove it from the profile page.
     */
    public function setIsSaved(bool $isSaved): self
    {
        $this->isSaved = $isSaved;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleGiftIsSaved',
            'received_gift_id' => $this->getReceivedGiftId(),
            'is_saved' => $this->getIsSaved(),
        ];
    }
}
