<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a forwarded story. Stories can't be forwarded to secret chats. A story can be forwarded only if story.can_be_forwarded
 */
class InputMessageStory extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** Story identifier */
        #[SerializedName('story_id')]
        private int $storyId,
    ) {
    }

    /**
     * Get Identifier of the chat that posted the story
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set Identifier of the chat that posted the story
     */
    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    /**
     * Get Story identifier
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Story identifier
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
        ];
    }
}
