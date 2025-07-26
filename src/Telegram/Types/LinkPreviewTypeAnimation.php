<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to an animation @animation The animation
 */
class LinkPreviewTypeAnimation extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('animation')]
        private Animation|null $animation = null,
    ) {
    }

    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeAnimation',
            'animation' => $this->getAnimation(),
        ];
    }
}
