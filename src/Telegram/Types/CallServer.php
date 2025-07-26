<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a server for relaying call data
 */
class CallServer implements \JsonSerializable
{
    public function __construct(
        /** Server identifier */
        #[SerializedName('id')]
        private int $id,
        /** Server IPv4 address */
        #[SerializedName('ip_address')]
        private string $ipAddress,
        /** Server IPv6 address */
        #[SerializedName('ipv6_address')]
        private string $ipv6Address,
        /** Server port number */
        #[SerializedName('port')]
        private int $port,
        /** Server type */
        #[SerializedName('type')]
        private CallServerType|null $type = null,
    ) {
    }

    /**
     * Get Server identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Server identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Server IPv4 address
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * Set Server IPv4 address
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get Server IPv6 address
     */
    public function getIpv6Address(): string
    {
        return $this->ipv6Address;
    }

    /**
     * Set Server IPv6 address
     */
    public function setIpv6Address(string $ipv6Address): self
    {
        $this->ipv6Address = $ipv6Address;

        return $this;
    }

    /**
     * Get Server port number
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Set Server port number
     */
    public function setPort(int $port): self
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get Server type
     */
    public function getType(): CallServerType|null
    {
        return $this->type;
    }

    /**
     * Set Server type
     */
    public function setType(CallServerType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callServer',
            'id' => $this->getId(),
            'ip_address' => $this->getIpAddress(),
            'ipv6_address' => $this->getIpv6Address(),
            'port' => $this->getPort(),
            'type' => $this->getType(),
        ];
    }
}
