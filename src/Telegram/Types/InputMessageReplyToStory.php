<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a story to be replied.
 */
class InputMessageReplyToStory extends InputMessageReplyTo implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the poster of the story. Currently, stories can be replied only in the chat that posted the story; channel stories can't be replied */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** The identifier of the story */
        #[SerializedName('story_id')]
        private int $storyId,
    ) {
    }

    /**
     * Get The identifier of the poster of the story. Currently, stories can be replied only in the chat that posted the story; channel stories can't be replied.
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set The identifier of the poster of the story. Currently, stories can be replied only in the chat that posted the story; channel stories can't be replied.
     */
    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    /**
     * Get The identifier of the story.
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set The identifier of the story.
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageReplyToStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
        ];
    }
}
