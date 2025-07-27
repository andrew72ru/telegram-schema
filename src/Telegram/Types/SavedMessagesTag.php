<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a tag used in Saved Messages or a Saved Messages topic.
 */
class SavedMessagesTag implements \JsonSerializable
{
    public function __construct(
        /** The tag */
        #[SerializedName('tag')]
        private ReactionType|null $tag = null,
        /** Label of the tag; 0-12 characters. Always empty if the tag is returned for a Saved Messages topic */
        #[SerializedName('label')]
        private string $label,
        /** Number of times the tag was used; may be 0 if the tag has non-empty label */
        #[SerializedName('count')]
        private int $count,
    ) {
    }

    /**
     * Get The tag.
     */
    public function getTag(): ReactionType|null
    {
        return $this->tag;
    }

    /**
     * Set The tag.
     */
    public function setTag(ReactionType|null $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get Label of the tag; 0-12 characters. Always empty if the tag is returned for a Saved Messages topic.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Set Label of the tag; 0-12 characters. Always empty if the tag is returned for a Saved Messages topic.
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get Number of times the tag was used; may be 0 if the tag has non-empty label.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Set Number of times the tag was used; may be 0 if the tag has non-empty label.
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'savedMessagesTag',
            'tag' => $this->getTag(),
            'label' => $this->getLabel(),
            'count' => $this->getCount(),
        ];
    }
}
