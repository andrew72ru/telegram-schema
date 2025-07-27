<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Loads more active stories from a story list. The loaded stories will be sent through updates. Active stories are sorted by.
 */
class LoadActiveStories extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The story list in which to load active stories */
        #[SerializedName('story_list')]
        private StoryList|null $storyList = null,
    ) {
    }

    /**
     * Get The story list in which to load active stories.
     */
    public function getStoryList(): StoryList|null
    {
        return $this->storyList;
    }

    /**
     * Set The story list in which to load active stories.
     */
    public function setStoryList(StoryList|null $storyList): self
    {
        $this->storyList = $storyList;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'loadActiveStories',
            'story_list' => $this->getStoryList(),
        ];
    }
}
