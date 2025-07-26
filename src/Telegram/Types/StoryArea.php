<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a clickable rectangle area on a story media @position Position of the area @type Type of the area
 */
class StoryArea implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('position')]
        private StoryAreaPosition|null $position = null,
        #[SerializedName('type')]
        private StoryAreaType|null $type = null,
    ) {
    }

    public function getPosition(): StoryAreaPosition|null
    {
        return $this->position;
    }

    public function setPosition(StoryAreaPosition|null $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getType(): StoryAreaType|null
    {
        return $this->type;
    }

    public function setType(StoryAreaType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyArea',
            'position' => $this->getPosition(),
            'type' => $this->getType(),
        ];
    }
}
