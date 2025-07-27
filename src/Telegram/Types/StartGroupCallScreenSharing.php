<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Starts screen sharing in a joined group call. Returns join response payload for tgcalls.
 */
class StartGroupCallScreenSharing extends Text implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Screen sharing audio channel synchronization source identifier; received from tgcalls */
        #[SerializedName('audio_source_id')]
        private int $audioSourceId,
        /** Group call join payload; received from tgcalls */
        #[SerializedName('payload')]
        private string $payload,
    ) {
    }

    /**
     * Get Group call identifier.
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier.
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get Screen sharing audio channel synchronization source identifier; received from tgcalls.
     */
    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    /**
     * Set Screen sharing audio channel synchronization source identifier; received from tgcalls.
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'startGroupCallScreenSharing',
            'group_call_id' => $this->getGroupCallId(),
            'audio_source_id' => $this->getAudioSourceId(),
            'payload' => $this->getPayload(),
        ];
    }
}
