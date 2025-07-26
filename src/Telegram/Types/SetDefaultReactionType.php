<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes type of default reaction for the current user @reaction_type New type of the default reaction. The paid reaction can't be set as default
 */
class SetDefaultReactionType extends Ok implements \JsonSerializable
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
            '@type' => 'setDefaultReactionType',
            'reaction_type' => $this->getReactionType(),
        ];
    }
}
