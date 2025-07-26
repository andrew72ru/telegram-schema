<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about the total amount of data that was used for calls
 */
class NetworkStatisticsEntryCall extends NetworkStatisticsEntry implements \JsonSerializable
{
    public function __construct(
        /** Type of the network the data was sent through. Call setNetworkType to maintain the actual network type */
        #[SerializedName('network_type')]
        private NetworkType|null $networkType = null,
        /** Total number of bytes sent */
        #[SerializedName('sent_bytes')]
        private int $sentBytes,
        /** Total number of bytes received */
        #[SerializedName('received_bytes')]
        private int $receivedBytes,
        /** Total call duration, in seconds */
        #[SerializedName('duration')]
        private float $duration,
    ) {
    }

    /**
     * Get Type of the network the data was sent through. Call setNetworkType to maintain the actual network type
     */
    public function getNetworkType(): NetworkType|null
    {
        return $this->networkType;
    }

    /**
     * Set Type of the network the data was sent through. Call setNetworkType to maintain the actual network type
     */
    public function setNetworkType(NetworkType|null $networkType): self
    {
        $this->networkType = $networkType;

        return $this;
    }

    /**
     * Get Total number of bytes sent
     */
    public function getSentBytes(): int
    {
        return $this->sentBytes;
    }

    /**
     * Set Total number of bytes sent
     */
    public function setSentBytes(int $sentBytes): self
    {
        $this->sentBytes = $sentBytes;

        return $this;
    }

    /**
     * Get Total number of bytes received
     */
    public function getReceivedBytes(): int
    {
        return $this->receivedBytes;
    }

    /**
     * Set Total number of bytes received
     */
    public function setReceivedBytes(int $receivedBytes): self
    {
        $this->receivedBytes = $receivedBytes;

        return $this;
    }

    /**
     * Get Total call duration, in seconds
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    /**
     * Set Total call duration, in seconds
     */
    public function setDuration(float $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'networkStatisticsEntryCall',
            'network_type' => $this->getNetworkType(),
            'sent_bytes' => $this->getSentBytes(),
            'received_bytes' => $this->getReceivedBytes(),
            'duration' => $this->getDuration(),
        ];
    }
}
