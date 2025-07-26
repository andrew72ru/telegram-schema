<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An animation message (GIF-style).
 */
class MessageAnimation extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** The animation description */
        #[SerializedName('animation')]
        private Animation|null $animation = null,
        /** Animation caption */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
        /** True, if the animation preview must be covered by a spoiler animation */
        #[SerializedName('has_spoiler')]
        private bool $hasSpoiler,
        /** True, if the animation thumbnail must be blurred and the animation must be shown only while tapped */
        #[SerializedName('is_secret')]
        private bool $isSecret,
    ) {
    }

    /**
     * Get The animation description
     */
    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    /**
     * Set The animation description
     */
    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get Animation caption
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Animation caption
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    /**
     * Get True, if the animation preview must be covered by a spoiler animation
     */
    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    /**
     * Set True, if the animation preview must be covered by a spoiler animation
     */
    public function setHasSpoiler(bool $hasSpoiler): self
    {
        $this->hasSpoiler = $hasSpoiler;

        return $this;
    }

    /**
     * Get True, if the animation thumbnail must be blurred and the animation must be shown only while tapped
     */
    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    /**
     * Set True, if the animation thumbnail must be blurred and the animation must be shown only while tapped
     */
    public function setIsSecret(bool $isSecret): self
    {
        $this->isSecret = $isSecret;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageAnimation',
            'animation' => $this->getAnimation(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
            'has_spoiler' => $this->getHasSpoiler(),
            'is_secret' => $this->getIsSecret(),
        ];
    }
}
