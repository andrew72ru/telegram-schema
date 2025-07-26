<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area pointing to a suggested reaction. App needs to show a clickable reaction on the area and call setStoryReaction when the are is clicked
 */
class StoryAreaTypeSuggestedReaction extends StoryAreaType implements \JsonSerializable
{
    public function __construct(
        /** Type of the reaction */
        #[SerializedName('reaction_type')]
        private ReactionType|null $reactionType = null,
        /** Number of times the reaction was added */
        #[SerializedName('total_count')]
        private int $totalCount,
        /** True, if reaction has a dark background */
        #[SerializedName('is_dark')]
        private bool $isDark,
        /** True, if reaction corner is flipped */
        #[SerializedName('is_flipped')]
        private bool $isFlipped,
    ) {
    }

    /**
     * Get Type of the reaction
     */
    public function getReactionType(): ReactionType|null
    {
        return $this->reactionType;
    }

    /**
     * Set Type of the reaction
     */
    public function setReactionType(ReactionType|null $reactionType): self
    {
        $this->reactionType = $reactionType;

        return $this;
    }

    /**
     * Get Number of times the reaction was added
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Set Number of times the reaction was added
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get True, if reaction has a dark background
     */
    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    /**
     * Set True, if reaction has a dark background
     */
    public function setIsDark(bool $isDark): self
    {
        $this->isDark = $isDark;

        return $this;
    }

    /**
     * Get True, if reaction corner is flipped
     */
    public function getIsFlipped(): bool
    {
        return $this->isFlipped;
    }

    /**
     * Set True, if reaction corner is flipped
     */
    public function setIsFlipped(bool $isFlipped): self
    {
        $this->isFlipped = $isFlipped;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyAreaTypeSuggestedReaction',
            'reaction_type' => $this->getReactionType(),
            'total_count' => $this->getTotalCount(),
            'is_dark' => $this->getIsDark(),
            'is_flipped' => $this->getIsFlipped(),
        ];
    }
}
