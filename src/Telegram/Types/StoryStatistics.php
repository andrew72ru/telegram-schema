<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A detailed statistics about a story
 */
class StoryStatistics implements \JsonSerializable
{
    public function __construct(
        /** A graph containing number of story views and shares */
        #[SerializedName('story_interaction_graph')]
        private StatisticalGraph|null $storyInteractionGraph = null,
        /** A graph containing number of story reactions */
        #[SerializedName('story_reaction_graph')]
        private StatisticalGraph|null $storyReactionGraph = null,
    ) {
    }

    /**
     * Get A graph containing number of story views and shares
     */
    public function getStoryInteractionGraph(): StatisticalGraph|null
    {
        return $this->storyInteractionGraph;
    }

    /**
     * Set A graph containing number of story views and shares
     */
    public function setStoryInteractionGraph(StatisticalGraph|null $storyInteractionGraph): self
    {
        $this->storyInteractionGraph = $storyInteractionGraph;

        return $this;
    }

    /**
     * Get A graph containing number of story reactions
     */
    public function getStoryReactionGraph(): StatisticalGraph|null
    {
        return $this->storyReactionGraph;
    }

    /**
     * Set A graph containing number of story reactions
     */
    public function setStoryReactionGraph(StatisticalGraph|null $storyReactionGraph): self
    {
        $this->storyReactionGraph = $storyReactionGraph;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyStatistics',
            'story_interaction_graph' => $this->getStoryInteractionGraph(),
            'story_reaction_graph' => $this->getStoryReactionGraph(),
        ];
    }
}
