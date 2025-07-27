<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with paid media.
 */
class MessagePaidMedia extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Number of Telegram Stars needed to buy access to the media in the message */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Information about the media */
        #[SerializedName('media')]
        private array|null $media = null,
        /** Media caption */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** True, if the caption must be shown above the media; otherwise, the caption must be shown below the media */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
    ) {
    }

    /**
     * Get Number of Telegram Stars needed to buy access to the media in the message.
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars needed to buy access to the media in the message.
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Information about the media.
     */
    public function getMedia(): array|null
    {
        return $this->media;
    }

    /**
     * Set Information about the media.
     */
    public function setMedia(array|null $media): self
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get Media caption.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Media caption.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the caption must be shown above the media; otherwise, the caption must be shown below the media.
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set True, if the caption must be shown above the media; otherwise, the caption must be shown below the media.
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePaidMedia',
            'star_count' => $this->getStarCount(),
            'media' => $this->getMedia(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
        ];
    }
}
