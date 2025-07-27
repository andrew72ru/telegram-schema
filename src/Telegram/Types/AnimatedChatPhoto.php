<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Animated variant of a chat photo in MPEG4 format.
 */
class AnimatedChatPhoto implements \JsonSerializable
{
    public function __construct(
        /** Animation width and height */
        #[SerializedName('length')]
        private int $length,
        /** Information about the animation file */
        #[SerializedName('file')]
        private File|null $file = null,
        /** Timestamp of the frame, used as a static chat photo */
        #[SerializedName('main_frame_timestamp')]
        private float $mainFrameTimestamp,
    ) {
    }

    /**
     * Get Animation width and height.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Animation width and height.
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get Information about the animation file.
     */
    public function getFile(): File|null
    {
        return $this->file;
    }

    /**
     * Set Information about the animation file.
     */
    public function setFile(File|null $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get Timestamp of the frame, used as a static chat photo.
     */
    public function getMainFrameTimestamp(): float
    {
        return $this->mainFrameTimestamp;
    }

    /**
     * Set Timestamp of the frame, used as a static chat photo.
     */
    public function setMainFrameTimestamp(float $mainFrameTimestamp): self
    {
        $this->mainFrameTimestamp = $mainFrameTimestamp;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'animatedChatPhoto',
            'length' => $this->getLength(),
            'file' => $this->getFile(),
            'main_frame_timestamp' => $this->getMainFrameTimestamp(),
        ];
    }
}
