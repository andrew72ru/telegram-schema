<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that a story is closed by the user
 */
class CloseStory extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the poster of the story to close */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** The identifier of the story */
        #[SerializedName('story_id')]
        private int $storyId,
    ) {
    }

    /**
     * Get The identifier of the poster of the story to close
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set The identifier of the poster of the story to close
     */
    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    /**
     * Get The identifier of the story
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set The identifier of the story
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'closeStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
        ];
    }
}
