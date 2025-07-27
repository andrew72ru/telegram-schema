<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * All reactions are available in the chat, excluding the paid reaction and custom reactions in channel chats.
 */
class ChatAvailableReactionsAll extends ChatAvailableReactions implements \JsonSerializable
{
    public function __construct(
        /** The maximum allowed number of reactions per message; 1-11 */
        #[SerializedName('max_reaction_count')]
        private int $maxReactionCount,
    ) {
    }

    /**
     * Get The maximum allowed number of reactions per message; 1-11.
     */
    public function getMaxReactionCount(): int
    {
        return $this->maxReactionCount;
    }

    /**
     * Set The maximum allowed number of reactions per message; 1-11.
     */
    public function setMaxReactionCount(int $maxReactionCount): self
    {
        $this->maxReactionCount = $maxReactionCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatAvailableReactionsAll',
            'max_reaction_count' => $this->getMaxReactionCount(),
        ];
    }
}
