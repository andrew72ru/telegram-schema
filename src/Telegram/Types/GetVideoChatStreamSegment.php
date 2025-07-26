<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a file with a segment of a video chat stream in a modified OGG format for audio or MPEG-4 format for video
 */
class GetVideoChatStreamSegment extends Data implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Point in time when the stream segment begins; Unix timestamp in milliseconds */
        #[SerializedName('time_offset')]
        private int $timeOffset,
        /** Segment duration scale; 0-1. Segment's duration is 1000/(2**scale) milliseconds */
        #[SerializedName('scale')]
        private int $scale,
        /** Identifier of an audio/video channel to get as received from tgcalls */
        #[SerializedName('channel_id')]
        private int $channelId,
        /** Video quality as received from tgcalls; pass null to get the worst available quality */
        #[SerializedName('video_quality')]
        private GroupCallVideoQuality|null $videoQuality = null,
    ) {
    }

    /**
     * Get Group call identifier
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get Point in time when the stream segment begins; Unix timestamp in milliseconds
     */
    public function getTimeOffset(): int
    {
        return $this->timeOffset;
    }

    /**
     * Set Point in time when the stream segment begins; Unix timestamp in milliseconds
     */
    public function setTimeOffset(int $timeOffset): self
    {
        $this->timeOffset = $timeOffset;

        return $this;
    }

    /**
     * Get Segment duration scale; 0-1. Segment's duration is 1000/(2**scale) milliseconds
     */
    public function getScale(): int
    {
        return $this->scale;
    }

    /**
     * Set Segment duration scale; 0-1. Segment's duration is 1000/(2**scale) milliseconds
     */
    public function setScale(int $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get Identifier of an audio/video channel to get as received from tgcalls
     */
    public function getChannelId(): int
    {
        return $this->channelId;
    }

    /**
     * Set Identifier of an audio/video channel to get as received from tgcalls
     */
    public function setChannelId(int $channelId): self
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * Get Video quality as received from tgcalls; pass null to get the worst available quality
     */
    public function getVideoQuality(): GroupCallVideoQuality|null
    {
        return $this->videoQuality;
    }

    /**
     * Set Video quality as received from tgcalls; pass null to get the worst available quality
     */
    public function setVideoQuality(GroupCallVideoQuality|null $videoQuality): self
    {
        $this->videoQuality = $videoQuality;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getVideoChatStreamSegment',
            'group_call_id' => $this->getGroupCallId(),
            'time_offset' => $this->getTimeOffset(),
            'scale' => $this->getScale(),
            'channel_id' => $this->getChannelId(),
            'video_quality' => $this->getVideoQuality(),
        ];
    }
}
