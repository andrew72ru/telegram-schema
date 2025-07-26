<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a freeform gradient fill of a background @colors A list of 3 or 4 colors of the freeform gradient in the RGB format
 */
class BackgroundFillFreeformGradient extends BackgroundFill implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('colors')]
        private array|null $colors = null,
    ) {
    }

    public function getColors(): array|null
    {
        return $this->colors;
    }

    public function setColors(array|null $colors): self
    {
        $this->colors = $colors;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'backgroundFillFreeformGradient',
            'colors' => $this->getColors(),
        ];
    }
}
