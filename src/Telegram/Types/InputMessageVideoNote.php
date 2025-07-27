<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A video note message.
 */
class InputMessageVideoNote extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Video note to be sent. The video is expected to be encoded to MPEG4 format with H.264 codec and have no data outside of the visible circle */
        #[SerializedName('video_note')]
        private InputFile|null $videoNote = null,
        /** Video thumbnail; may be null if empty; pass null to skip thumbnail uploading */
        #[SerializedName('thumbnail')]
        private InputThumbnail|null $thumbnail = null,
        /** Duration of the video, in seconds; 0-60 */
        #[SerializedName('duration')]
        private int $duration,
        /** Video width and height; must be positive and not greater than 640 */
        #[SerializedName('length')]
        private int $length,
        /** Video note self-destruct type; may be null if none; pass null if none; private chats only */
        #[SerializedName('self_destruct_type')]
        private MessageSelfDestructType|null $selfDestructType = null,
    ) {
    }

    /**
     * Get Video note to be sent. The video is expected to be encoded to MPEG4 format with H.264 codec and have no data outside of the visible circle.
     */
    public function getVideoNote(): InputFile|null
    {
        return $this->videoNote;
    }

    /**
     * Set Video note to be sent. The video is expected to be encoded to MPEG4 format with H.264 codec and have no data outside of the visible circle.
     */
    public function setVideoNote(InputFile|null $videoNote): self
    {
        $this->videoNote = $videoNote;

        return $this;
    }

    /**
     * Get Video thumbnail; may be null if empty; pass null to skip thumbnail uploading.
     */
    public function getThumbnail(): InputThumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Video thumbnail; may be null if empty; pass null to skip thumbnail uploading.
     */
    public function setThumbnail(InputThumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Duration of the video, in seconds; 0-60.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the video, in seconds; 0-60.
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Video width and height; must be positive and not greater than 640.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Video width and height; must be positive and not greater than 640.
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get Video note self-destruct type; may be null if none; pass null if none; private chats only.
     */
    public function getSelfDestructType(): MessageSelfDestructType|null
    {
        return $this->selfDestructType;
    }

    /**
     * Set Video note self-destruct type; may be null if none; pass null if none; private chats only.
     */
    public function setSelfDestructType(MessageSelfDestructType|null $selfDestructType): self
    {
        $this->selfDestructType = $selfDestructType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageVideoNote',
            'video_note' => $this->getVideoNote(),
            'thumbnail' => $this->getThumbnail(),
            'duration' => $this->getDuration(),
            'length' => $this->getLength(),
            'self_destruct_type' => $this->getSelfDestructType(),
        ];
    }
}
