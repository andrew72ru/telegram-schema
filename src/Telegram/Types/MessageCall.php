<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with information about an ended call @is_video True, if the call was a video call @discard_reason Reason why the call was discarded @duration Call duration, in seconds.
 */
class MessageCall extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_video')]
        private bool $isVideo,
        #[SerializedName('discard_reason')]
        private CallDiscardReason|null $discardReason = null,
        #[SerializedName('duration')]
        private int $duration,
    ) {
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function setIsVideo(bool $isVideo): self
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    public function getDiscardReason(): CallDiscardReason|null
    {
        return $this->discardReason;
    }

    public function setDiscardReason(CallDiscardReason|null $discardReason): self
    {
        $this->discardReason = $discardReason;

        return $this;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageCall',
            'is_video' => $this->getIsVideo(),
            'discard_reason' => $this->getDiscardReason(),
            'duration' => $this->getDuration(),
        ];
    }
}
