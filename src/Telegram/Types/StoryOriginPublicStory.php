<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The original story was a public story that was posted by a known chat @chat_id Identifier of the chat that posted original story @story_id Story identifier of the original story.
 */
class StoryOriginPublicStory extends StoryOrigin implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('story_id')]
        private int $storyId,
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
            '@type' => 'storyOriginPublicStory',
            'chat_id' => $this->getChatId(),
            'story_id' => $this->getStoryId(),
        ];
    }
}
