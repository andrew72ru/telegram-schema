<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes chosen reaction on a story that has already been sent.
 */
class SetStoryReaction extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the poster of the story */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** The identifier of the story */
        #[SerializedName('story_id')]
        private int $storyId,
        /** Type of the reaction to set; pass null to remove the reaction. Custom emoji reactions can be used only by Telegram Premium users. Paid reactions can't be set */
        #[SerializedName('reaction_type')]
        private ReactionType|null $reactionType = null,
        /** Pass true if the reaction needs to be added to recent reactions */
        #[SerializedName('update_recent_reactions')]
        private bool $updateRecentReactions,
    ) {
    }

    /**
     * Get The identifier of the poster of the story.
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set The identifier of the poster of the story.
     */
    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    /**
     * Get The identifier of the story.
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set The identifier of the story.
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get Type of the reaction to set; pass null to remove the reaction. Custom emoji reactions can be used only by Telegram Premium users. Paid reactions can't be set.
     */
    public function getReactionType(): ReactionType|null
    {
        return $this->reactionType;
    }

    /**
     * Set Type of the reaction to set; pass null to remove the reaction. Custom emoji reactions can be used only by Telegram Premium users. Paid reactions can't be set.
     */
    public function setReactionType(ReactionType|null $reactionType): self
    {
        $this->reactionType = $reactionType;

        return $this;
    }

    /**
     * Get Pass true if the reaction needs to be added to recent reactions.
     */
    public function getUpdateRecentReactions(): bool
    {
        return $this->updateRecentReactions;
    }

    /**
     * Set Pass true if the reaction needs to be added to recent reactions.
     */
    public function setUpdateRecentReactions(bool $updateRecentReactions): self
    {
        $this->updateRecentReactions = $updateRecentReactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setStoryReaction',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'reaction_type' => $this->getReactionType(),
            'update_recent_reactions' => $this->getUpdateRecentReactions(),
        ];
    }
}
