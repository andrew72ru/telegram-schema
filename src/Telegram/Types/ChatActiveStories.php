<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes active stories posted by a chat.
 */
class ChatActiveStories implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the stories */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the story list in which the stories are shown; may be null if the stories aren't shown in a story list */
        #[SerializedName('list')]
        private StoryList|null $list = null,
        /** A parameter used to determine order of the stories in the story list; 0 if the stories doesn't need to be shown in the story list. Stories must be sorted by the pair (order, story_poster_chat_id) in descending order */
        #[SerializedName('order')]
        private int $order,
        /** Identifier of the last read active story */
        #[SerializedName('max_read_story_id')]
        private int $maxReadStoryId,
        /** Basic information about the stories; use getStory to get full information about the stories. The stories are in chronological order (i.e., in order of increasing story identifiers) */
        #[SerializedName('stories')]
        private array|null $stories = null,
    ) {
    }

    /**
     * Get Identifier of the chat that posted the stories.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat that posted the stories.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the story list in which the stories are shown; may be null if the stories aren't shown in a story list.
     */
    public function getList(): StoryList|null
    {
        return $this->list;
    }

    /**
     * Set Identifier of the story list in which the stories are shown; may be null if the stories aren't shown in a story list.
     */
    public function setList(StoryList|null $list): self
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Get A parameter used to determine order of the stories in the story list; 0 if the stories doesn't need to be shown in the story list. Stories must be sorted by the pair (order, story_poster_chat_id) in descending order.
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Set A parameter used to determine order of the stories in the story list; 0 if the stories doesn't need to be shown in the story list. Stories must be sorted by the pair (order, story_poster_chat_id) in descending order.
     */
    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get Identifier of the last read active story.
     */
    public function getMaxReadStoryId(): int
    {
        return $this->maxReadStoryId;
    }

    /**
     * Set Identifier of the last read active story.
     */
    public function setMaxReadStoryId(int $maxReadStoryId): self
    {
        $this->maxReadStoryId = $maxReadStoryId;

        return $this;
    }

    /**
     * Get Basic information about the stories; use getStory to get full information about the stories. The stories are in chronological order (i.e., in order of increasing story identifiers).
     */
    public function getStories(): array|null
    {
        return $this->stories;
    }

    /**
     * Set Basic information about the stories; use getStory to get full information about the stories. The stories are in chronological order (i.e., in order of increasing story identifiers).
     */
    public function setStories(array|null $stories): self
    {
        $this->stories = $stories;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActiveStories',
            'chat_id' => $this->getChatId(),
            'list' => $this->getList(),
            'order' => $this->getOrder(),
            'max_read_story_id' => $this->getMaxReadStoryId(),
            'stories' => $this->getStories(),
        ];
    }
}
