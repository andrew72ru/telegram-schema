<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains identifier of a story along with identifier of the chat that posted it.
 */
class StoryFullId implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the story */
        #[SerializedName('poster_chat_id')]
        private int $posterChatId,
        /** Unique story identifier among stories of the chat */
        #[SerializedName('story_id')]
        private int $storyId,
    ) {
    }

    /**
     * Get Identifier of the chat that posted the story.
     */
    public function getPosterChatId(): int
    {
        return $this->posterChatId;
    }

    /**
     * Set Identifier of the chat that posted the story.
     */
    public function setPosterChatId(int $posterChatId): self
    {
        $this->posterChatId = $posterChatId;

        return $this;
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyFullId',
            'poster_chat_id' => $this->getPosterChatId(),
            'story_id' => $this->getStoryId(),
        ];
    }
}
