<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns forwards of a story as a message to public chats and reposts by public channels. Can be used only if the story is posted on behalf of the current user or story.can_get_statistics == true.
 */
class GetStoryPublicForwards extends PublicForwards implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the poster of the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** The identifier of the story */
        #[SerializedName('story_id')]
        private int $storyId,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of messages and stories to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get The identifier of the poster of the story
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set The identifier of the poster of the story
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

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages and stories to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages and stories to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStoryPublicForwards',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
