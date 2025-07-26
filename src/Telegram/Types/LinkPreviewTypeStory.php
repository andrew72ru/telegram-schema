<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a story. Link preview description is unavailable @story_poster_chat_id The identifier of the chat that posted the story @story_id Story identifier
 */
class LinkPreviewTypeStory extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        #[SerializedName('story_id')]
        private int $storyId,
    ) {
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
        ];
    }
}
