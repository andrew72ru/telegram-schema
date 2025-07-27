<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video.
 */
class PageBlockVideo extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Video file; may be null */
        #[SerializedName('video')]
        private Video|null $video = null,
        /** Video caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
        /** True, if the video must be played automatically */
        #[SerializedName('need_autoplay')]
        private bool $needAutoplay,
        /** True, if the video must be looped */
        #[SerializedName('is_looped')]
        private bool $isLooped,
    ) {
    }

    /**
     * Get Video file; may be null.
     */
    public function getVideo(): Video|null
    {
        return $this->video;
    }

    /**
     * Set Video file; may be null.
     */
    public function setVideo(Video|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get Video caption.
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Video caption.
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the video must be played automatically.
     */
    public function getNeedAutoplay(): bool
    {
        return $this->needAutoplay;
    }

    /**
     * Set True, if the video must be played automatically.
     */
    public function setNeedAutoplay(bool $needAutoplay): self
    {
        $this->needAutoplay = $needAutoplay;

        return $this;
    }

    /**
     * Get True, if the video must be looped.
     */
    public function getIsLooped(): bool
    {
        return $this->isLooped;
    }

    /**
     * Set True, if the video must be looped.
     */
    public function setIsLooped(bool $isLooped): self
    {
        $this->isLooped = $isLooped;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockVideo',
            'video' => $this->getVideo(),
            'caption' => $this->getCaption(),
            'need_autoplay' => $this->getNeedAutoplay(),
            'is_looped' => $this->getIsLooped(),
        ];
    }
}
