<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of all stories posted by the given chat; requires can_edit_stories right in the chat.
 */
class GetChatArchivedStories extends Stories implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the story starting from which stories must be returned; use 0 to get results from the last story */
        #[SerializedName('from_story_id')]
        private int $fromStoryId,
        /** The maximum number of stories to be returned. */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the story starting from which stories must be returned; use 0 to get results from the last story
     */
    public function getFromStoryId(): int
    {
        return $this->fromStoryId;
    }

    /**
     * Set Identifier of the story starting from which stories must be returned; use 0 to get results from the last story
     */
    public function setFromStoryId(int $fromStoryId): self
    {
        $this->fromStoryId = $fromStoryId;

        return $this;
    }

    /**
     * Get The maximum number of stories to be returned.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of stories to be returned.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatArchivedStories',
            'chat_id' => $this->getChatId(),
            'from_story_id' => $this->getFromStoryId(),
            'limit' => $this->getLimit(),
        ];
    }
}
