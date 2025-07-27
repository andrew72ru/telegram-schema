<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes story list in which stories from the chat are shown @chat_id Identifier of the chat that posted stories @story_list New list for active stories posted by the chat.
 */
class SetChatActiveStoriesList extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('story_list')]
        private StoryList|null $storyList = null,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatActiveStoriesList',
            'chat_id' => $this->getChatId(),
            'story_list' => $this->getStoryList(),
        ];
    }
}
