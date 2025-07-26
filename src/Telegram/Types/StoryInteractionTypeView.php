<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A view of the story @chosen_reaction_type Type of the reaction that was chosen by the viewer; may be null if none
 */
class StoryInteractionTypeView extends StoryInteractionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chosen_reaction_type')]
        private ReactionType|null $chosenReactionType = null,
    ) {
    }

    public function getChosenReactionType(): ReactionType|null
    {
        return $this->chosenReactionType;
    }

    public function setChosenReactionType(ReactionType|null $chosenReactionType): self
    {
        $this->chosenReactionType = $chosenReactionType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyInteractionTypeView',
            'chosen_reaction_type' => $this->getChosenReactionType(),
        ];
    }
}
