<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an available stream in a video chat
 */
class VideoChatStream implements \JsonSerializable
{
    public function __construct(
        /** Identifier of an audio/video channel */
        #[SerializedName('channel_id')]
        private int $channelId,
        /** Scale of segment durations in the stream. The duration is 1000/(2**scale) milliseconds */
        #[SerializedName('scale')]
        private int $scale,
        /** Point in time when the stream currently ends; Unix timestamp in milliseconds */
        #[SerializedName('time_offset')]
        private int $timeOffset,
    ) {
    }

    /**
     * Get Identifier of an audio/video channel
     */
    public function getChannelId(): int
    {
        return $this->channelId;
    }

    /**
     * Set Identifier of an audio/video channel
     */
    public function setChannelId(int $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * Get Scale of segment durations in the stream. The duration is 1000/(2**scale) milliseconds
     */
    public function getScale(): int
    {
        return $this->scale;
    }

    /**
     * Set Scale of segment durations in the stream. The duration is 1000/(2**scale) milliseconds
     */
    public function setScale(int $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get Point in time when the stream currently ends; Unix timestamp in milliseconds
     */
    public function getTimeOffset(): int
    {
        return $this->timeOffset;
    }

    /**
     * Set Point in time when the stream currently ends; Unix timestamp in milliseconds
     */
    public function setTimeOffset(int $timeOffset): self
    {
        $this->timeOffset = $timeOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'videoChatStream',
            'channel_id' => $this->getChannelId(),
            'scale' => $this->getScale(),
            'time_offset' => $this->getTimeOffset(),
        ];
    }
}
