<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes an animation from the list of saved animations @animation Animation file to be removed
 */
class RemoveSavedAnimation extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('animation')]
        private InputFile|null $animation = null,
    ) {
    }

    public function getAnimation(): InputFile|null
    {
        return $this->animation;
    }

    public function setAnimation(InputFile|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeSavedAnimation',
            'animation' => $this->getAnimation(),
        ];
    }
}
