<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video note message @video_note The video note description @is_viewed True, if at least one of the recipients has viewed the video note @is_secret True, if the video note thumbnail must be blurred and the video note must be shown only while tapped
 */
class MessageVideoNote extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('video_note')]
        private VideoNote|null $videoNote = null,
        #[SerializedName('is_viewed')]
        private bool $isViewed,
        #[SerializedName('is_secret')]
        private bool $isSecret,
    ) {
    }

    public function getVideoNote(): VideoNote|null
    {
        return $this->videoNote;
    }

    public function setVideoNote(VideoNote|null $videoNote): self
    {
        $this->videoNote = $videoNote;

        return $this;
    }

    public function getIsViewed(): bool
    {
        return $this->isViewed;
    }

    public function setIsViewed(bool $isViewed): self
    {
        $this->isViewed = $isViewed;

        return $this;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function setIsSecret(bool $isSecret): self
    {
        $this->isSecret = $isSecret;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageVideoNote',
            'video_note' => $this->getVideoNote(),
            'is_viewed' => $this->getIsViewed(),
            'is_secret' => $this->getIsSecret(),
        ];
    }
}
