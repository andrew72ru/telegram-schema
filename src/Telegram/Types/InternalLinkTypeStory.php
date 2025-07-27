<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a story. Call searchPublicChat with the given poster username, then call getStory with the received chat identifier and the given story identifier, then show the story if received.
 */
class InternalLinkTypeStory extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the poster of the story */
        #[SerializedName('story_poster_username')]
        private string $storyPosterUsername,
        /** Story identifier */
        #[SerializedName('story_id')]
        private int $storyId,
    ) {
    }

    /**
     * Get Username of the poster of the story.
     */
    public function getStoryPosterUsername(): string
    {
        return $this->storyPosterUsername;
    }

    /**
     * Set Username of the poster of the story.
     */
    public function setStoryPosterUsername(string $storyPosterUsername): self
    {
        $this->storyPosterUsername = $storyPosterUsername;

        return $this;
    }

    /**
     * Get Story identifier.
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set Story identifier.
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeStory',
            'story_poster_username' => $this->getStoryPosterUsername(),
            'story_id' => $this->getStoryId(),
        ];
    }
}
