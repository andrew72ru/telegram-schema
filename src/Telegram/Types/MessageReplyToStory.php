<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a story replied by a given message @story_poster_chat_id The identifier of the poster of the story @story_id The identifier of the story.
 */
class MessageReplyToStory extends MessageReplyTo implements \JsonSerializable
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
            '@type' => 'messageReplyToStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
        ];
    }
}
