<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A detailed statistics about a message
 */
class MessageStatistics implements \JsonSerializable
{
    public function __construct(
        /** A graph containing number of message views and shares */
        #[SerializedName('message_interaction_graph')]
        private StatisticalGraph|null $messageInteractionGraph = null,
        /** A graph containing number of message reactions */
        #[SerializedName('message_reaction_graph')]
        private StatisticalGraph|null $messageReactionGraph = null,
    ) {
    }

    /**
     * Get A graph containing number of message views and shares
     */
    public function getMessageInteractionGraph(): StatisticalGraph|null
    {
        return $this->messageInteractionGraph;
    }

    /**
     * Set A graph containing number of message views and shares
     */
    public function setMessageInteractionGraph(StatisticalGraph|null $messageInteractionGraph): self
    {
        $this->messageInteractionGraph = $messageInteractionGraph;

        return $this;
    }

    /**
     * Get A graph containing number of message reactions
     */
    public function getMessageReactionGraph(): StatisticalGraph|null
    {
        return $this->messageReactionGraph;
    }

    /**
     * Set A graph containing number of message reactions
     */
    public function setMessageReactionGraph(StatisticalGraph|null $messageReactionGraph): self
    {
        $this->messageReactionGraph = $messageReactionGraph;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageStatistics',
            'message_interaction_graph' => $this->getMessageInteractionGraph(),
            'message_reaction_graph' => $this->getMessageReactionGraph(),
        ];
    }
}
