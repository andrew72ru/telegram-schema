<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a solid fill of a background @color A color of the background in the RGB format
 */
class BackgroundFillSolid extends BackgroundFill implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('color')]
        private int $color,
    ) {
    }

    public function getColor(): int
    {
        return $this->color;
    }

    public function setColor(int $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'backgroundFillSolid',
            'color' => $this->getColor(),
        ];
    }
}
