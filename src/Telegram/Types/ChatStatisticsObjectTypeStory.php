<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a story posted on behalf of the chat @story_id Story identifier
 */
class ChatStatisticsObjectTypeStory extends ChatStatisticsObjectType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('story_id')]
        private int $storyId,
    ) {
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
            '@type' => 'chatStatisticsObjectTypeStory',
            'story_id' => $this->getStoryId(),
        ];
    }
}
