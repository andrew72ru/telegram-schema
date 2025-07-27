<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Encrypts group call data before sending them over network using tgcalls.
 */
class EncryptGroupCallData extends Data implements \JsonSerializable
{
    public function __construct(
        /** Group call identifier. The call must not be a video chat */
        #[SerializedName('group_call_id')]
        private int $groupCallId,
        /** Data channel for which data is encrypted */
        #[SerializedName('data_channel')]
        private GroupCallDataChannel|null $dataChannel = null,
        /** Data to encrypt */
        #[SerializedName('data')]
        private string $data,
        /** Size of data prefix that must be kept unencrypted */
        #[SerializedName('unencrypted_prefix_size')]
        private int $unencryptedPrefixSize,
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
     * Get Data channel for which data is encrypted.
     */
    public function getDataChannel(): GroupCallDataChannel|null
    {
        return $this->dataChannel;
    }

    /**
     * Set Data channel for which data is encrypted.
     */
    public function setDataChannel(GroupCallDataChannel|null $dataChannel): self
    {
        $this->dataChannel = $dataChannel;

        return $this;
    }

    /**
     * Get Data to encrypt.
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Set Data to encrypt.
     */
    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get Size of data prefix that must be kept unencrypted.
     */
    public function getUnencryptedPrefixSize(): int
    {
        return $this->unencryptedPrefixSize;
    }

    /**
     * Set Size of data prefix that must be kept unencrypted.
     */
    public function setUnencryptedPrefixSize(int $unencryptedPrefixSize): self
    {
        $this->unencryptedPrefixSize = $unencryptedPrefixSize;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'encryptGroupCallData',
            'group_call_id' => $this->getGroupCallId(),
            'data_channel' => $this->getDataChannel(),
            'data' => $this->getData(),
            'unencrypted_prefix_size' => $this->getUnencryptedPrefixSize(),
        ];
    }
}
