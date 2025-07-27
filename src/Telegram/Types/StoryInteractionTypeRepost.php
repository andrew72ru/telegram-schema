<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A repost of the story as a story @story The reposted story.
 */
class StoryInteractionTypeRepost extends StoryInteractionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('story')]
        private Story|null $story = null,
    ) {
    }

    public function getStory(): Story|null
    {
        return $this->story;
    }

    public function setStory(Story|null $story): self
    {
        $this->story = $story;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyInteractionTypeRepost',
            'story' => $this->getStory(),
        ];
    }
}
