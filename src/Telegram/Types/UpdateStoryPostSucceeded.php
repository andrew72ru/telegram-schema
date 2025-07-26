<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A story has been successfully posted @story The posted story @old_story_id The previous temporary story identifier
 */
class UpdateStoryPostSucceeded extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('story')]
        private Story|null $story = null,
        #[SerializedName('old_story_id')]
        private int $oldStoryId,
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

    public function getOldStoryId(): int
    {
        return $this->oldStoryId;
    }

    public function setOldStoryId(int $oldStoryId): self
    {
        $this->oldStoryId = $oldStoryId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateStoryPostSucceeded',
            'story' => $this->getStory(),
            'old_story_id' => $this->getOldStoryId(),
        ];
    }
}
