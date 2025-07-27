<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the list of pinned stories on a chat page; requires can_edit_stories right in the chat.
 */
class SetChatPinnedStories extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the stories */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New list of pinned stories. All stories must be posted to the chat page first. There can be up to getOption("pinned_story_count_max") pinned stories on a chat page */
        #[SerializedName('story_ids')]
        private array|null $storyIds = null,
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
     * Get New list of pinned stories. All stories must be posted to the chat page first. There can be up to getOption("pinned_story_count_max") pinned stories on a chat page.
     */
    public function getStoryIds(): array|null
    {
        return $this->storyIds;
    }

    /**
     * Set New list of pinned stories. All stories must be posted to the chat page first. There can be up to getOption("pinned_story_count_max") pinned stories on a chat page.
     */
    public function setStoryIds(array|null $storyIds): self
    {
        $this->storyIds = $storyIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatPinnedStories',
            'chat_id' => $this->getChatId(),
            'story_ids' => $this->getStoryIds(),
        ];
    }
}
