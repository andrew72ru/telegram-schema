<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A story was changed @story The new information about the story
 */
class UpdateStory extends Update implements \JsonSerializable
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
            '@type' => 'updateStory',
            'story' => $this->getStory(),
        ];
    }
}
