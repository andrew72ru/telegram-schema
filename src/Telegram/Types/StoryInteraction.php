<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents interaction with a story.
 */
class StoryInteraction implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user or chat that made the interaction */
        #[SerializedName('actor_id')]
        private MessageSender|null $actorId = null,
        /** Approximate point in time (Unix timestamp) when the interaction happened */
        #[SerializedName('interaction_date')]
        private int $interactionDate,
        /** Block list to which the actor is added; may be null if none or for chat stories */
        #[SerializedName('block_list')]
        private BlockList|null $blockList = null,
        /** Type of the interaction */
        #[SerializedName('type')]
        private StoryInteractionType|null $type = null,
    ) {
    }

    /**
     * Get Identifier of the user or chat that made the interaction.
     */
    public function getActorId(): MessageSender|null
    {
        return $this->actorId;
    }

    /**
     * Set Identifier of the user or chat that made the interaction.
     */
    public function setActorId(MessageSender|null $actorId): self
    {
        $this->actorId = $actorId;

        return $this;
    }

    /**
     * Get Approximate point in time (Unix timestamp) when the interaction happened.
     */
    public function getInteractionDate(): int
    {
        return $this->interactionDate;
    }

    /**
     * Set Approximate point in time (Unix timestamp) when the interaction happened.
     */
    public function setInteractionDate(int $interactionDate): self
    {
        $this->interactionDate = $interactionDate;

        return $this;
    }

    /**
     * Get Block list to which the actor is added; may be null if none or for chat stories.
     */
    public function getBlockList(): BlockList|null
    {
        return $this->blockList;
    }

    /**
     * Set Block list to which the actor is added; may be null if none or for chat stories.
     */
    public function setBlockList(BlockList|null $blockList): self
    {
        $this->blockList = $blockList;

        return $this;
    }

    /**
     * Get Type of the interaction.
     */
    public function getType(): StoryInteractionType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the interaction.
     */
    public function setType(StoryInteractionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyInteraction',
            'actor_id' => $this->getActorId(),
            'interaction_date' => $this->getInteractionDate(),
            'block_list' => $this->getBlockList(),
            'type' => $this->getType(),
        ];
    }
}
