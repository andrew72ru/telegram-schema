<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Manually adds a new animation to the list of saved animations. The new animation is added to the beginning of the list. If the animation was already in the list, it is removed first.
 */
class AddSavedAnimation extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The animation file to be added. Only animations known to the server (i.e., successfully sent via a message) can be added to the list */
        #[SerializedName('animation')]
        private InputFile|null $animation = null,
    ) {
    }

    /**
     * Get The animation file to be added. Only animations known to the server (i.e., successfully sent via a message) can be added to the list
     */
    public function getAnimation(): InputFile|null
    {
        return $this->animation;
    }

    /**
     * Set The animation file to be added. Only animations known to the server (i.e., successfully sent via a message) can be added to the list
     */
    public function setAnimation(InputFile|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addSavedAnimation',
            'animation' => $this->getAnimation(),
        ];
    }
}
