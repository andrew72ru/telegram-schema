<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Number of chats in a story list has changed @story_list The story list @chat_count Approximate total number of chats with active stories in the list
 */
class UpdateStoryListChatCount extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('story_list')]
        private StoryList|null $storyList = null,
        #[SerializedName('chat_count')]
        private int $chatCount,
    ) {
    }

    public function getStoryList(): StoryList|null
    {
        return $this->storyList;
    }

    public function setStoryList(StoryList|null $storyList): self
    {
        $this->storyList = $storyList;

        return $this;
    }

    public function getChatCount(): int
    {
        return $this->chatCount;
    }

    public function setChatCount(int $chatCount): self
    {
        $this->chatCount = $chatCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateStoryListChatCount',
            'story_list' => $this->getStoryList(),
            'chat_count' => $this->getChatCount(),
        ];
    }
}
