<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The type of default reaction has changed @reaction_type The new type of the default reaction
 */
class UpdateDefaultReactionType extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('reaction_type')]
        private ReactionType|null $reactionType = null,
    ) {
    }

    public function getReactionType(): ReactionType|null
    {
        return $this->reactionType;
    }

    public function setReactionType(ReactionType|null $reactionType): self
    {
        $this->reactionType = $reactionType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateDefaultReactionType',
            'reaction_type' => $this->getReactionType(),
        ];
    }
}
