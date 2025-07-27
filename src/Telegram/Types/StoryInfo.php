<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains basic information about a story.
 */
class StoryInfo implements \JsonSerializable
{
    public function __construct(
        /** Unique story identifier among stories of the chat */
        #[SerializedName('story_id')]
        private int $storyId,
        /** Point in time (Unix timestamp) when the story was published */
        #[SerializedName('date')]
        private int $date,
        /** True, if the story is available only to close friends */
        #[SerializedName('is_for_close_friends')]
        private bool $isForCloseFriends,
    ) {
    }

    /**
     * Get Unique story identifier among stories of the chat.
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Unique story identifier among stories of the chat.
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the story was published.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the story was published.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get True, if the story is available only to close friends.
     */
    public function getIsForCloseFriends(): bool
    {
        return $this->isForCloseFriends;
    }

    /**
     * Set True, if the story is available only to close friends.
     */
    public function setIsForCloseFriends(bool $isForCloseFriends): self
    {
        $this->isForCloseFriends = $isForCloseFriends;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyInfo',
            'story_id' => $this->getStoryId(),
            'date' => $this->getDate(),
            'is_for_close_friends' => $this->getIsForCloseFriends(),
        ];
    }
}
