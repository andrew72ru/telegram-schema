<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a proxy server
 */
class Proxy implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the proxy */
        #[SerializedName('id')]
        private int $id,
        /** Proxy server domain or IP address */
        #[SerializedName('server')]
        private string $server,
        /** Proxy server port */
        #[SerializedName('port')]
        private int $port,
        /** Point in time (Unix timestamp) when the proxy was last used; 0 if never */
        #[SerializedName('last_used_date')]
        private int $lastUsedDate,
        /** True, if the proxy is enabled now */
        #[SerializedName('is_enabled')]
        private bool $isEnabled,
        /** Type of the proxy */
        #[SerializedName('type')]
        private ProxyType|null $type = null,
    ) {
    }

    /**
     * Get Unique identifier of the proxy
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the proxy
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Proxy server domain or IP address
     */
    public function getServer(): string
    {
        return $this->server;
    }

    /**
     * Set Proxy server domain or IP address
     */
    public function setServer(string $server): self
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get Proxy server port
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Set Proxy server port
     */
    public function setPort(int $port): self
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the proxy was last used; 0 if never
     */
    public function getLastUsedDate(): int
    {
        return $this->lastUsedDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the proxy was last used; 0 if never
     */
    public function setLastUsedDate(int $lastUsedDate): self
    {
        $this->lastUsedDate = $lastUsedDate;

        return $this;
    }

    /**
     * Get True, if the proxy is enabled now
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * Set True, if the proxy is enabled now
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get Type of the proxy
     */
    public function getType(): ProxyType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the proxy
     */
    public function setType(ProxyType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'proxy',
            'id' => $this->getId(),
            'server' => $this->getServer(),
            'port' => $this->getPort(),
            'last_used_date' => $this->getLastUsedDate(),
            'is_enabled' => $this->getIsEnabled(),
            'type' => $this->getType(),
        ];
    }
}
