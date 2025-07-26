<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns detailed statistics about a story. Can be used only if story.can_get_statistics == true @chat_id Chat identifier @story_id Story identifier @is_dark Pass true if a dark theme is used by the application
 */
class GetStoryStatistics extends StoryStatistics implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('story_id')]
        private int $storyId,
        #[SerializedName('is_dark')]
        private bool $isDark,
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

    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    public function setIsDark(bool $isDark): self
    {
        $this->isDark = $isDark;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStoryStatistics',
            'chat_id' => $this->getChatId(),
            'story_id' => $this->getStoryId(),
            'is_dark' => $this->getIsDark(),
        ];
    }
}
