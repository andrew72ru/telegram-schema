<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An animation.
 */
class PageBlockAnimation extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Animation file; may be null */
        #[SerializedName('animation')]
        private Animation|null $animation = null,
        /** Animation caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
        /** True, if the animation must be played automatically */
        #[SerializedName('need_autoplay')]
        private bool $needAutoplay,
    ) {
    }

    /**
     * Get Animation file; may be null.
     */
    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    /**
     * Set Animation file; may be null.
     */
    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get Animation caption.
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Animation caption.
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the animation must be played automatically.
     */
    public function getNeedAutoplay(): bool
    {
        return $this->needAutoplay;
    }

    /**
     * Set True, if the animation must be played automatically.
     */
    public function setNeedAutoplay(bool $needAutoplay): self
    {
        $this->needAutoplay = $needAutoplay;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockAnimation',
            'animation' => $this->getAnimation(),
            'caption' => $this->getCaption(),
            'need_autoplay' => $this->getNeedAutoplay(),
        ];
    }
}
