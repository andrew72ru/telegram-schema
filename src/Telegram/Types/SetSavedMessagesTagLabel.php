<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes label of a Saved Messages tag; for Telegram Premium users only @tag The tag which label will be changed @label New label for the tag; 0-12 characters
 */
class SetSavedMessagesTagLabel extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('tag')]
        private ReactionType|null $tag = null,
        #[SerializedName('label')]
        private string $label,
    ) {
    }

    public function getTag(): ReactionType|null
    {
        return $this->tag;
    }

    public function setTag(ReactionType|null $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setSavedMessagesTagLabel',
            'tag' => $this->getTag(),
            'label' => $this->getLabel(),
        ];
    }
}
