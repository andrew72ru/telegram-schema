<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a clickable rectangle area on a story media to be added @position Position of the area @type Type of the area
 */
class InputStoryArea implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('position')]
        private StoryAreaPosition|null $position = null,
        #[SerializedName('type')]
        private InputStoryAreaType|null $type = null,
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

    public function getType(): InputStoryAreaType|null
    {
        return $this->type;
    }

    public function setType(InputStoryAreaType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryArea',
            'position' => $this->getPosition(),
            'type' => $this->getType(),
        ];
    }
}
