<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about interactions with a story
 */
class StoryInteractionInfo implements \JsonSerializable
{
    public function __construct(
        /** Number of times the story was viewed */
        #[SerializedName('view_count')]
        private int $viewCount,
        /** Number of times the story was forwarded; 0 if none or unknown */
        #[SerializedName('forward_count')]
        private int $forwardCount,
        /** Number of reactions added to the story; 0 if none or unknown */
        #[SerializedName('reaction_count')]
        private int $reactionCount,
        /** Identifiers of at most 3 recent viewers of the story */
        #[SerializedName('recent_viewer_user_ids')]
        private array|null $recentViewerUserIds = null,
    ) {
    }

    /**
     * Get Number of times the story was viewed
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * Set Number of times the story was viewed
     */
    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * Get Number of times the story was forwarded; 0 if none or unknown
     */
    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    /**
     * Set Number of times the story was forwarded; 0 if none or unknown
     */
    public function setForwardCount(int $forwardCount): self
    {
        $this->forwardCount = $forwardCount;

        return $this;
    }

    /**
     * Get Number of reactions added to the story; 0 if none or unknown
     */
    public function getReactionCount(): int
    {
        return $this->reactionCount;
    }

    /**
     * Set Number of reactions added to the story; 0 if none or unknown
     */
    public function setReactionCount(int $reactionCount): self
    {
        $this->reactionCount = $reactionCount;

        return $this;
    }

    /**
     * Get Identifiers of at most 3 recent viewers of the story
     */
    public function getRecentViewerUserIds(): array|null
    {
        return $this->recentViewerUserIds;
    }

    /**
     * Set Identifiers of at most 3 recent viewers of the story
     */
    public function setRecentViewerUserIds(array|null $recentViewerUserIds): self
    {
        $this->recentViewerUserIds = $recentViewerUserIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyInteractionInfo',
            'view_count' => $this->getViewCount(),
            'forward_count' => $this->getForwardCount(),
            'reaction_count' => $this->getReactionCount(),
            'recent_viewer_user_ids' => $this->getRecentViewerUserIds(),
        ];
    }
}
