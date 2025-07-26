<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of animations @animations List of animations
 */
class Animations implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('animations')]
        private array|null $animations = null,
    ) {
    }

    public function getAnimations(): array|null
    {
        return $this->animations;
    }

    public function setAnimations(array|null $animations): self
    {
        $this->animations = $animations;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'animations',
            'animations' => $this->getAnimations(),
        ];
    }
}
