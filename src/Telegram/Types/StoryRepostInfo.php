<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about original story that was reposted
 */
class StoryRepostInfo implements \JsonSerializable
{
    public function __construct(
        /** Origin of the story that was reposted */
        #[SerializedName('origin')]
        private StoryOrigin|null $origin = null,
        /** True, if story content was modified during reposting; otherwise, story wasn't modified */
        #[SerializedName('is_content_modified')]
        private bool $isContentModified,
    ) {
    }

    /**
     * Get Origin of the story that was reposted
     */
    public function getOrigin(): StoryOrigin|null
    {
        return $this->origin;
    }

    /**
     * Set Origin of the story that was reposted
     */
    public function setOrigin(StoryOrigin|null $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get True, if story content was modified during reposting; otherwise, story wasn't modified
     */
    public function getIsContentModified(): bool
    {
        return $this->isContentModified;
    }

    /**
     * Set True, if story content was modified during reposting; otherwise, story wasn't modified
     */
    public function setIsContentModified(bool $isContentModified): self
    {
        $this->isContentModified = $isContentModified;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyRepostInfo',
            'origin' => $this->getOrigin(),
            'is_content_modified' => $this->getIsContentModified(),
        ];
    }
}
