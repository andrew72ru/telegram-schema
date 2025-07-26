<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether a story is accessible after expiration. Can be called only if story.can_toggle_is_posted_to_chat_page == true
 */
class ToggleStoryIsPostedToChatPage extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat that posted the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** Identifier of the story */
        #[SerializedName('story_id')]
        private int $storyId,
        /** Pass true to make the story accessible after expiration; pass false to make it private */
        #[SerializedName('is_posted_to_chat_page')]
        private bool $isPostedToChatPage,
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
     * Get Identifier of the story
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Identifier of the story
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get Pass true to make the story accessible after expiration; pass false to make it private
     */
    public function getIsPostedToChatPage(): bool
    {
        return $this->isPostedToChatPage;
    }

    /**
     * Set Pass true to make the story accessible after expiration; pass false to make it private
     */
    public function setIsPostedToChatPage(bool $isPostedToChatPage): self
    {
        $this->isPostedToChatPage = $isPostedToChatPage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleStoryIsPostedToChatPage',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'is_posted_to_chat_page' => $this->getIsPostedToChatPage(),
        ];
    }
}
