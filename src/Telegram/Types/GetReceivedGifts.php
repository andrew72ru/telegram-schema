<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns gifts received by the given user or chat
 */
class GetReceivedGifts extends ReceivedGifts implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which to send the request; for bots only */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Identifier of the gift receiver */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** Pass true to exclude gifts that aren't saved to the chat's profile page. Always true for gifts received by other users and channel chats without can_post_messages administrator right */
        #[SerializedName('exclude_unsaved')]
        private bool $excludeUnsaved,
        /** Pass true to exclude gifts that are saved to the chat's profile page. Always false for gifts received by other users and channel chats without can_post_messages administrator right */
        #[SerializedName('exclude_saved')]
        private bool $excludeSaved,
        /** Pass true to exclude gifts that can be purchased unlimited number of times */
        #[SerializedName('exclude_unlimited')]
        private bool $excludeUnlimited,
        /** Pass true to exclude gifts that can be purchased limited number of times */
        #[SerializedName('exclude_limited')]
        private bool $excludeLimited,
        /** Pass true to exclude upgraded gifts */
        #[SerializedName('exclude_upgraded')]
        private bool $excludeUpgraded,
        /** Pass true to sort results by gift price instead of send date */
        #[SerializedName('sort_by_price')]
        private bool $sortByPrice,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of gifts to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Unique identifier of business connection on behalf of which to send the request; for bots only
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which to send the request; for bots only
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get Identifier of the gift receiver
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the gift receiver
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get Pass true to exclude gifts that aren't saved to the chat's profile page. Always true for gifts received by other users and channel chats without can_post_messages administrator right
     */
    public function getExcludeUnsaved(): bool
    {
        return $this->excludeUnsaved;
    }

    /**
     * Set Pass true to exclude gifts that aren't saved to the chat's profile page. Always true for gifts received by other users and channel chats without can_post_messages administrator right
     */
    public function setExcludeUnsaved(bool $excludeUnsaved): self
    {
        $this->excludeUnsaved = $excludeUnsaved;

        return $this;
    }

    /**
     * Get Pass true to exclude gifts that are saved to the chat's profile page. Always false for gifts received by other users and channel chats without can_post_messages administrator right
     */
    public function getExcludeSaved(): bool
    {
        return $this->excludeSaved;
    }

    /**
     * Set Pass true to exclude gifts that are saved to the chat's profile page. Always false for gifts received by other users and channel chats without can_post_messages administrator right
     */
    public function setExcludeSaved(bool $excludeSaved): self
    {
        $this->excludeSaved = $excludeSaved;

        return $this;
    }

    /**
     * Get Pass true to exclude gifts that can be purchased unlimited number of times
     */
    public function getExcludeUnlimited(): bool
    {
        return $this->excludeUnlimited;
    }

    /**
     * Set Pass true to exclude gifts that can be purchased unlimited number of times
     */
    public function setExcludeUnlimited(bool $excludeUnlimited): self
    {
        $this->excludeUnlimited = $excludeUnlimited;

        return $this;
    }

    /**
     * Get Pass true to exclude gifts that can be purchased limited number of times
     */
    public function getExcludeLimited(): bool
    {
        return $this->excludeLimited;
    }

    /**
     * Set Pass true to exclude gifts that can be purchased limited number of times
     */
    public function setExcludeLimited(bool $excludeLimited): self
    {
        $this->excludeLimited = $excludeLimited;

        return $this;
    }

    /**
     * Get Pass true to exclude upgraded gifts
     */
    public function getExcludeUpgraded(): bool
    {
        return $this->excludeUpgraded;
    }

    /**
     * Set Pass true to exclude upgraded gifts
     */
    public function setExcludeUpgraded(bool $excludeUpgraded): self
    {
        $this->excludeUpgraded = $excludeUpgraded;

        return $this;
    }

    /**
     * Get Pass true to sort results by gift price instead of send date
     */
    public function getSortByPrice(): bool
    {
        return $this->sortByPrice;
    }

    /**
     * Set Pass true to sort results by gift price instead of send date
     */
    public function setSortByPrice(bool $sortByPrice): self
    {
        $this->sortByPrice = $sortByPrice;

        return $this;
    }

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of gifts to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of gifts to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getReceivedGifts',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'owner_id' => $this->getOwnerId(),
            'exclude_unsaved' => $this->getExcludeUnsaved(),
            'exclude_saved' => $this->getExcludeSaved(),
            'exclude_unlimited' => $this->getExcludeUnlimited(),
            'exclude_limited' => $this->getExcludeLimited(),
            'exclude_upgraded' => $this->getExcludeUpgraded(),
            'sort_by_price' => $this->getSortByPrice(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
