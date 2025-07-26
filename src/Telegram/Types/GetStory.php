<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a story
 */
class GetStory extends Story implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** Story identifier */
        #[SerializedName('story_id')]
        private int $storyId,
        /** Pass true to get only locally available information without sending network requests */
        #[SerializedName('only_local')]
        private bool $onlyLocal,
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
     * Get Pass true to get only locally available information without sending network requests
     */
    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    /**
     * Set Pass true to get only locally available information without sending network requests
     */
    public function setOnlyLocal(bool $onlyLocal): self
    {
        $this->onlyLocal = $onlyLocal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'only_local' => $this->getOnlyLocal(),
        ];
    }
}
