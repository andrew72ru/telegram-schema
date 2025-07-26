<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a forwarded story
 */
class MessageStory extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** Story identifier */
        #[SerializedName('story_id')]
        private int $storyId,
        /** True, if the story was automatically forwarded because of a mention of the user */
        #[SerializedName('via_mention')]
        private bool $viaMention,
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

    /**
     * Get True, if the story was automatically forwarded because of a mention of the user
     */
    public function getViaMention(): bool
    {
        return $this->viaMention;
    }

    /**
     * Set True, if the story was automatically forwarded because of a mention of the user
     */
    public function setViaMention(bool $viaMention): self
    {
        $this->viaMention = $viaMention;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'via_mention' => $this->getViaMention(),
        ];
    }
}
