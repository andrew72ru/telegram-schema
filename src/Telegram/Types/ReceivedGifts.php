<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of gifts received by a user or a chat
 */
class ReceivedGifts implements \JsonSerializable
{
    public function __construct(
        /** The total number of received gifts */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** The list of gifts */
        #[SerializedName('gifts')]
        private array|null $gifts = null,
        /** True, if notifications about new gifts of the owner are enabled */
        #[SerializedName('are_notifications_enabled')]
        private bool $areNotificationsEnabled,
        /** The offset for the next request. If empty, then there are no more results */
        #[SerializedName('next_offset')]
        private string $nextOffset,
    ) {
    }

    /**
     * Get The total number of received gifts
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set The total number of received gifts
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get The list of gifts
     */
    public function getGifts(): array|null
    {
        return $this->gifts;
    }

    /**
     * Set The list of gifts
     */
    public function setGifts(array|null $gifts): self
    {
        $this->gifts = $gifts;

        return $this;
    }

    /**
     * Get True, if notifications about new gifts of the owner are enabled
     */
    public function getAreNotificationsEnabled(): bool
    {
        return $this->areNotificationsEnabled;
    }

    /**
     * Set True, if notifications about new gifts of the owner are enabled
     */
    public function setAreNotificationsEnabled(bool $areNotificationsEnabled): self
    {
        $this->areNotificationsEnabled = $areNotificationsEnabled;

        return $this;
    }

    /**
     * Get The offset for the next request. If empty, then there are no more results
     */
    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    /**
     * Set The offset for the next request. If empty, then there are no more results
     */
    public function setNextOffset(string $nextOffset): self
    {
        $this->nextOffset = $nextOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'receivedGifts',
            'total_count' => $this->getTotalCount(),
            'gifts' => $this->getGifts(),
            'are_notifications_enabled' => $this->getAreNotificationsEnabled(),
            'next_offset' => $this->getNextOffset(),
        ];
    }
}
