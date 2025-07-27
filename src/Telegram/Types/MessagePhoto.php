<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A photo message.
 */
class MessagePhoto extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** The photo */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Photo caption */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
        /** True, if the photo preview must be covered by a spoiler animation */
        #[SerializedName('has_spoiler')]
        private bool $hasSpoiler,
        /** True, if the photo must be blurred and must be shown only while tapped */
        #[SerializedName('is_secret')]
        private bool $isSecret,
    ) {
    }

    /**
     * Get The photo.
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set The photo.
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Photo caption.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Photo caption.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo.
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo.
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    /**
     * Get True, if the photo preview must be covered by a spoiler animation.
     */
    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    /**
     * Set True, if the photo preview must be covered by a spoiler animation.
     */
    public function setHasSpoiler(bool $hasSpoiler): self
    {
        $this->hasSpoiler = $hasSpoiler;

        return $this;
    }

    /**
     * Get True, if the photo must be blurred and must be shown only while tapped.
     */
    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    /**
     * Set True, if the photo must be blurred and must be shown only while tapped.
     */
    public function setIsSecret(bool $isSecret): self
    {
        $this->isSecret = $isSecret;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePhoto',
            'photo' => $this->getPhoto(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
            'has_spoiler' => $this->getHasSpoiler(),
            'is_secret' => $this->getIsSecret(),
        ];
    }
}
