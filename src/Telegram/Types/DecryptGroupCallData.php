<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Decrypts group call data received by tgcalls.
 */
class DecryptGroupCallData extends Data implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier. The call must not be a video chat */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Identifier of the group call participant, which sent the data */
        #[SerializedName('participant_id')]
        private MessageSender|null $participantId = null,
        /** Data channel for which data was encrypted; pass null if unknown */
        #[SerializedName('data_channel')]
        private GroupCallDataChannel|null $dataChannel = null,
        /** Data to decrypt */
        #[SerializedName('data')]
        private string $data,
    ) {
    }

    /**
     * Get Group call identifier. The call must not be a video chat.
     */
    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    /**
     * Set Group call identifier. The call must not be a video chat.
     */
    public function setGroupCallId(int $groupCallId): self
    {
        $this->groupCallId = $groupCallId;

        return $this;
    }

    /**
     * Get Identifier of the group call participant, which sent the data.
     */
    public function getParticipantId(): MessageSender|null
    {
        return $this->participantId;
    }

    /**
     * Set Identifier of the group call participant, which sent the data.
     */
    public function setParticipantId(MessageSender|null $participantId): self
    {
        $this->participantId = $participantId;

        return $this;
    }

    /**
     * Get Data channel for which data was encrypted; pass null if unknown.
     */
    public function getDataChannel(): GroupCallDataChannel|null
    {
        return $this->dataChannel;
    }

    /**
     * Set Data channel for which data was encrypted; pass null if unknown.
     */
    public function setDataChannel(GroupCallDataChannel|null $dataChannel): self
    {
        $this->dataChannel = $dataChannel;

        return $this;
    }

    /**
     * Get Data to decrypt.
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Set Data to decrypt.
     */
    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'decryptGroupCallData',
            'group_call_id' => $this->getGroupCallId(),
            'participant_id' => $this->getParticipantId(),
            'data_channel' => $this->getDataChannel(),
            'data' => $this->getData(),
        ];
    }
}
