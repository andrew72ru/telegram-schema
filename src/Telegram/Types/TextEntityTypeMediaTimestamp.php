<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A media timestamp @media_timestamp Timestamp from which a video/audio/video note/voice note/story playing must start, in seconds. The media can be in the content or the link preview of the current message, or in the same places in the replied message
 */
class TextEntityTypeMediaTimestamp extends TextEntityType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('media_timestamp')]
        private int $mediaTimestamp,
    ) {
    }

    public function getMediaTimestamp(): int
    {
        return $this->mediaTimestamp;
    }

    public function setMediaTimestamp(int $mediaTimestamp): self
    {
        $this->mediaTimestamp = $mediaTimestamp;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeMediaTimestamp',
            'media_timestamp' => $this->getMediaTimestamp(),
        ];
    }
}
