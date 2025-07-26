<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video message
 */
class MessageVideo extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** The video description */
        #[SerializedName('video')]
        private Video|null $video = null,
        /** Alternative qualities of the video */
        #[SerializedName('alternative_videos')]
        private array|null $alternativeVideos = null,
        /** Available storyboards for the video */
        #[SerializedName('storyboards')]
        private array|null $storyboards = null,
        /** Cover of the video; may be null if none */
        #[SerializedName('cover')]
        private Photo|null $cover = null,
        /** Timestamp from which the video playing must start, in seconds */
        #[SerializedName('start_timestamp')]
        private int $startTimestamp,
        /** Video caption */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** True, if the caption must be shown above the video; otherwise, the caption must be shown below the video */
        #[SerializedName('show_caption_above_media')]
        private bool $showCaptionAboveMedia,
        /** True, if the video preview must be covered by a spoiler animation */
        #[SerializedName('has_spoiler')]
        private bool $hasSpoiler,
        /** True, if the video thumbnail must be blurred and the video must be shown only while tapped */
        #[SerializedName('is_secret')]
        private bool $isSecret,
    ) {
    }

    /**
     * Get The video description
     */
    public function getVideo(): Video|null
    {
        return $this->video;
    }

    /**
     * Set The video description
     */
    public function setVideo(Video|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get Alternative qualities of the video
     */
    public function getAlternativeVideos(): array|null
    {
        return $this->alternativeVideos;
    }

    /**
     * Set Alternative qualities of the video
     */
    public function setAlternativeVideos(array|null $alternativeVideos): self
    {
        $this->alternativeVideos = $alternativeVideos;

        return $this;
    }

    /**
     * Get Available storyboards for the video
     */
    public function getStoryboards(): array|null
    {
        return $this->storyboards;
    }

    /**
     * Set Available storyboards for the video
     */
    public function setStoryboards(array|null $storyboards): self
    {
        $this->storyboards = $storyboards;

        return $this;
    }

    /**
     * Get Cover of the video; may be null if none
     */
    public function getCover(): Photo|null
    {
        return $this->cover;
    }

    /**
     * Set Cover of the video; may be null if none
     */
    public function setCover(Photo|null $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get Timestamp from which the video playing must start, in seconds
     */
    public function getStartTimestamp(): int
    {
        return $this->startTimestamp;
    }

    /**
     * Set Timestamp from which the video playing must start, in seconds
     */
    public function setStartTimestamp(int $startTimestamp): self
    {
        $this->startTimestamp = $startTimestamp;

        return $this;
    }

    /**
     * Get Video caption
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Video caption
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the caption must be shown above the video; otherwise, the caption must be shown below the video
     */
    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    /**
     * Set True, if the caption must be shown above the video; otherwise, the caption must be shown below the video
     */
    public function setShowCaptionAboveMedia(bool $showCaptionAboveMedia): self
    {
        $this->showCaptionAboveMedia = $showCaptionAboveMedia;

        return $this;
    }

    /**
     * Get True, if the video preview must be covered by a spoiler animation
     */
    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    /**
     * Set True, if the video preview must be covered by a spoiler animation
     */
    public function setHasSpoiler(bool $hasSpoiler): self
    {
        $this->hasSpoiler = $hasSpoiler;

        return $this;
    }

    /**
     * Get True, if the video thumbnail must be blurred and the video must be shown only while tapped
     */
    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    /**
     * Set True, if the video thumbnail must be blurred and the video must be shown only while tapped
     */
    public function setIsSecret(bool $isSecret): self
    {
        $this->isSecret = $isSecret;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageVideo',
            'video' => $this->getVideo(),
            'alternative_videos' => $this->getAlternativeVideos(),
            'storyboards' => $this->getStoryboards(),
            'cover' => $this->getCover(),
            'start_timestamp' => $this->getStartTimestamp(),
            'caption' => $this->getCaption(),
            'show_caption_above_media' => $this->getShowCaptionAboveMedia(),
            'has_spoiler' => $this->getHasSpoiler(),
            'is_secret' => $this->getIsSecret(),
        ];
    }
}
