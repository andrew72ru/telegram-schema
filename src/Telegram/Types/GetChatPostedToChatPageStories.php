<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of stories that posted by the given chat to its chat page. If from_story_id == 0, then pinned stories are returned first.
 */
class GetChatPostedToChatPageStories extends Stories implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the story starting from which stories must be returned; use 0 to get results from pinned and the newest story */
        #[SerializedName('from_story_id')]
        private int $fromStoryId,
        /** The maximum number of stories to be returned. */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the story starting from which stories must be returned; use 0 to get results from pinned and the newest story.
     */
    public function getFromStoryId(): int
    {
        return $this->fromStoryId;
    }

    /**
     * Set Identifier of the story starting from which stories must be returned; use 0 to get results from pinned and the newest story.
     */
    public function setFromStoryId(int $fromStoryId): self
    {
        $this->fromStoryId = $fromStoryId;

        return $this;
    }

    /**
     * Get The maximum number of stories to be returned..
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of stories to be returned..
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatPostedToChatPageStories',
            'chat_id' => $this->getChatId(),
            'from_story_id' => $this->getFromStoryId(),
            'limit' => $this->getLimit(),
        ];
    }
}
