<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Only specific reactions are available in the chat @reactions The list of reactions @max_reaction_count The maximum allowed number of reactions per message; 1-11.
 */
class ChatAvailableReactionsSome extends ChatAvailableReactions implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('reactions')]
        private array|null $reactions = null,
        #[SerializedName('max_reaction_count')]
        private int $maxReactionCount,
    ) {
    }

    public function getReactions(): array|null
    {
        return $this->reactions;
    }

    public function setReactions(array|null $reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    public function getMaxReactionCount(): int
    {
        return $this->maxReactionCount;
    }

    public function setMaxReactionCount(int $maxReactionCount): self
    {
        $this->maxReactionCount = $maxReactionCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatAvailableReactionsSome',
            'reactions' => $this->getReactions(),
            'max_reaction_count' => $this->getMaxReactionCount(),
        ];
    }
}
