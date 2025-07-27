<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about the total amount of data that was used to send and receive files.
 */
class NetworkStatisticsEntryFile extends NetworkStatisticsEntry implements \JsonSerializable
{
    public function __construct(
        /** Type of the file the data is part of; pass null if the data isn't related to files */
        #[SerializedName('file_type')]
        private FileType|null $fileType = null,
        /** Type of the network the data was sent through. Call setNetworkType to maintain the actual network type */
        #[SerializedName('network_type')]
        private NetworkType|null $networkType = null,
        /** Total number of bytes sent */
        #[SerializedName('sent_bytes')]
        private int $sentBytes,
        /** Total number of bytes received */
        #[SerializedName('received_bytes')]
        private int $receivedBytes,
    ) {
    }

    /**
     * Get Type of the file the data is part of; pass null if the data isn't related to files.
     */
    public function getFileType(): FileType|null
    {
        return $this->fileType;
    }

    /**
     * Set Type of the file the data is part of; pass null if the data isn't related to files.
     */
    public function setFileType(FileType|null $fileType): self
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get Type of the network the data was sent through. Call setNetworkType to maintain the actual network type.
     */
    public function getNetworkType(): NetworkType|null
    {
        return $this->networkType;
    }

    /**
     * Set Type of the network the data was sent through. Call setNetworkType to maintain the actual network type.
     */
    public function setNetworkType(NetworkType|null $networkType): self
    {
        $this->networkType = $networkType;

        return $this;
    }

    /**
     * Get Total number of bytes sent.
     */
    public function getSentBytes(): int
    {
        return $this->sentBytes;
    }

    /**
     * Set Total number of bytes sent.
     */
    public function setSentBytes(int $sentBytes): self
    {
        $this->sentBytes = $sentBytes;

        return $this;
    }

    /**
     * Get Total number of bytes received.
     */
    public function getReceivedBytes(): int
    {
        return $this->receivedBytes;
    }

    /**
     * Set Total number of bytes received.
     */
    public function setReceivedBytes(int $receivedBytes): self
    {
        $this->receivedBytes = $receivedBytes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'networkStatisticsEntryFile',
            'file_type' => $this->getFileType(),
            'network_type' => $this->getNetworkType(),
            'sent_bytes' => $this->getSentBytes(),
            'received_bytes' => $this->getReceivedBytes(),
        ];
    }
}
