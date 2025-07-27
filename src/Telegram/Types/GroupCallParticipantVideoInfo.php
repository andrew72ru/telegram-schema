<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a group call participant's video channel.
 */
class GroupCallParticipantVideoInfo implements \JsonSerializable
{
    public function __construct(
        /** List of synchronization source groups of the video */
        #[SerializedName('source_groups')]
        private array|null $sourceGroups = null,
        /** Video channel endpoint identifier */
        #[SerializedName('endpoint_id')]
        private string $endpointId,
        /** True, if the video is paused. This flag needs to be ignored, if new video frames are received */
        #[SerializedName('is_paused')]
        private bool $isPaused,
    ) {
    }

    /**
     * Get List of synchronization source groups of the video.
     */
    public function getSourceGroups(): array|null
    {
        return $this->sourceGroups;
    }

    /**
     * Set List of synchronization source groups of the video.
     */
    public function setSourceGroups(array|null $sourceGroups): self
    {
        $this->sourceGroups = $sourceGroups;

        return $this;
    }

    /**
     * Get Video channel endpoint identifier.
     */
    public function getEndpointId(): string
    {
        return $this->endpointId;
    }

    /**
     * Set Video channel endpoint identifier.
     */
    public function setEndpointId(string $endpointId): self
    {
        $this->endpointId = $endpointId;

        return $this;
    }

    /**
     * Get True, if the video is paused. This flag needs to be ignored, if new video frames are received.
     */
    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    /**
     * Set True, if the video is paused. This flag needs to be ignored, if new video frames are received.
     */
    public function setIsPaused(bool $isPaused): self
    {
        $this->isPaused = $isPaused;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallParticipantVideoInfo',
            'source_groups' => $this->getSourceGroups(),
            'endpoint_id' => $this->getEndpointId(),
            'is_paused' => $this->getIsPaused(),
        ];
    }
}
