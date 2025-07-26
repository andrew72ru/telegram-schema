<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the list of pinned gifts on the current user's or the channel's profile page; requires can_post_messages administrator right in the channel chat
 */
class SetPinnedGifts extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user or the channel chat that received the gifts */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** New list of pinned gifts. All gifts must be upgraded and saved on the profile page first. There can be up to getOption("pinned_gift_count_max") pinned gifts */
        #[SerializedName('received_gift_ids')]
        private array|null $receivedGiftIds = null,
    ) {
    }

    /**
     * Get Identifier of the user or the channel chat that received the gifts
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the user or the channel chat that received the gifts
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get New list of pinned gifts. All gifts must be upgraded and saved on the profile page first. There can be up to getOption("pinned_gift_count_max") pinned gifts
     */
    public function getReceivedGiftIds(): array|null
    {
        return $this->receivedGiftIds;
    }

    /**
     * Set New list of pinned gifts. All gifts must be upgraded and saved on the profile page first. There can be up to getOption("pinned_gift_count_max") pinned gifts
     */
    public function setReceivedGiftIds(array|null $receivedGiftIds): self
    {
        $this->receivedGiftIds = $receivedGiftIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPinnedGifts',
            'owner_id' => $this->getOwnerId(),
            'received_gift_ids' => $this->getReceivedGiftIds(),
        ];
    }
}
