<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video message.
 */
class PushMessageContentVideo extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Message content; may be null */
        #[SerializedName('video')]
        private Video|null $video = null,
        /** Video caption */
        #[SerializedName('caption')]
        private string $caption,
        /** True, if the video is secret */
        #[SerializedName('is_secret')]
        private bool $isSecret,
        /** True, if the message is a pinned message with the specified content */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Message content; may be null.
     */
    public function getVideo(): Video|null
    {
        return $this->video;
    }

    /**
     * Set Message content; may be null.
     */
    public function setVideo(Video|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get Video caption.
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * Set Video caption.
     */
    public function setCaption(string $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the video is secret.
     */
    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    /**
     * Set True, if the video is secret.
     */
    public function setIsSecret(bool $isSecret): self
    {
        $this->isSecret = $isSecret;

        return $this;
    }

    /**
     * Get True, if the message is a pinned message with the specified content.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the message is a pinned message with the specified content.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentVideo',
            'video' => $this->getVideo(),
            'caption' => $this->getCaption(),
            'is_secret' => $this->getIsSecret(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
