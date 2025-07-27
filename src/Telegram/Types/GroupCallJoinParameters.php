<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes parameters used to join a group call.
 */
class GroupCallJoinParameters implements \JsonSerializable
{
    public function __construct(
        /** Audio channel synchronization source identifier; received from tgcalls */
        #[SerializedName('audio_source_id')]
        private int $audioSourceId,
        /** Group call join payload; received from tgcalls */
        #[SerializedName('payload')]
        private string $payload,
        /** Pass true to join the call with muted microphone */
        #[SerializedName('is_muted')]
        private bool $isMuted,
        /** Pass true if the user's video is enabled */
        #[SerializedName('is_my_video_enabled')]
        private bool $isMyVideoEnabled,
    ) {
    }

    /**
     * Get Audio channel synchronization source identifier; received from tgcalls.
     */
    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    /**
     * Set Audio channel synchronization source identifier; received from tgcalls.
     */
    public function setAudioSourceId(int $audioSourceId): self
    {
        $this->audioSourceId = $audioSourceId;

        return $this;
    }

    /**
     * Get Group call join payload; received from tgcalls.
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Set Group call join payload; received from tgcalls.
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Get Pass true to join the call with muted microphone.
     */
    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    /**
     * Set Pass true to join the call with muted microphone.
     */
    public function setIsMuted(bool $isMuted): self
    {
        $this->isMuted = $isMuted;

        return $this;
    }

    /**
     * Get Pass true if the user's video is enabled.
     */
    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    /**
     * Set Pass true if the user's video is enabled.
     */
    public function setIsMyVideoEnabled(bool $isMyVideoEnabled): self
    {
        $this->isMyVideoEnabled = $isMyVideoEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallJoinParameters',
            'audio_source_id' => $this->getAudioSourceId(),
            'payload' => $this->getPayload(),
            'is_muted' => $this->getIsMuted(),
            'is_my_video_enabled' => $this->getIsMyVideoEnabled(),
        ];
    }
}
