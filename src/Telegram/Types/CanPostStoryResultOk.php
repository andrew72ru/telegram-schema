<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A story can be sent @story_count Number of stories that can be posted by the user
 */
class CanPostStoryResultOk extends CanPostStoryResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('story_count')]
        private int $storyCount,
    ) {
    }

    public function getStoryCount(): int
    {
        return $this->storyCount;
    }

    public function setStoryCount(int $storyCount): self
    {
        $this->storyCount = $storyCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canPostStoryResultOk',
            'story_count' => $this->getStoryCount(),
        ];
    }
}
