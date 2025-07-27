<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of stories.
 */
class Stories implements \JsonSerializable
{
    public function __construct(
        /** Approximate total number of stories found */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** The list of stories */
        #[SerializedName('stories')]
        private array|null $stories = null,
        /** Identifiers of the pinned stories; returned only in getChatPostedToChatPageStories with from_story_id == 0 */
        #[SerializedName('pinned_story_ids')]
        private array|null $pinnedStoryIds = null,
    ) {
    }

    /**
     * Get Approximate total number of stories found.
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Approximate total number of stories found.
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get The list of stories.
     */
    public function getStories(): array|null
    {
        return $this->stories;
    }

    /**
     * Set The list of stories.
     */
    public function setStories(array|null $stories): self
    {
        $this->stories = $stories;

        return $this;
    }

    /**
     * Get Identifiers of the pinned stories; returned only in getChatPostedToChatPageStories with from_story_id == 0.
     */
    public function getPinnedStoryIds(): array|null
    {
        return $this->pinnedStoryIds;
    }

    /**
     * Set Identifiers of the pinned stories; returned only in getChatPostedToChatPageStories with from_story_id == 0.
     */
    public function setPinnedStoryIds(array|null $pinnedStoryIds): self
    {
        $this->pinnedStoryIds = $pinnedStoryIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stories',
            'total_count' => $this->getTotalCount(),
            'stories' => $this->getStories(),
            'pinned_story_ids' => $this->getPinnedStoryIds(),
        ];
    }
}
