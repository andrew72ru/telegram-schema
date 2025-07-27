<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a simple network request to the Telegram servers via proxy; for testing only. Can be called before authorization.
 */
class TestProxy extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Proxy server domain or IP address */
        #[SerializedName('server')]
        private string $server,
        /** Proxy server port */
        #[SerializedName('port')]
        private int $port,
        /** Proxy type */
        #[SerializedName('type')]
        private ProxyType|null $type = null,
        /** Identifier of a datacenter with which to test connection */
        #[SerializedName('dc_id')]
        private int $dcId,
        /** The maximum overall timeout for the request */
        #[SerializedName('timeout')]
        private float $timeout,
    ) {
    }

    /**
     * Get Proxy server domain or IP address.
     */
    public function getServer(): string
    {
        return $this->server;
    }

    /**
     * Set Proxy server domain or IP address.
     */
    public function setServer(string $server): self
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get Proxy server port.
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Set Proxy server port.
     */
    public function setPort(int $port): self
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get Proxy type.
     */
    public function getType(): ProxyType|null
    {
        return $this->type;
    }

    /**
     * Set Proxy type.
     */
    public function setType(ProxyType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Identifier of a datacenter with which to test connection.
     */
    public function getDcId(): int
    {
        return $this->dcId;
    }

    /**
     * Set Identifier of a datacenter with which to test connection.
     */
    public function setDcId(int $dcId): self
    {
        $this->dcId = $dcId;

        return $this;
    }

    /**
     * Get The maximum overall timeout for the request.
     */
    public function getTimeout(): float
    {
        return $this->timeout;
    }

    /**
     * Set The maximum overall timeout for the request.
     */
    public function setTimeout(float $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testProxy',
            'server' => $this->getServer(),
            'port' => $this->getPort(),
            'type' => $this->getType(),
            'dc_id' => $this->getDcId(),
            'timeout' => $this->getTimeout(),
        ];
    }
}
