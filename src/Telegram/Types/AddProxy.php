<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a proxy server for network requests. Can be called before authorization
 */
class AddProxy extends Proxy implements \JsonSerializable
{
    public function __construct(
        /** Proxy server domain or IP address */
        #[SerializedName('server')]
        private string $server,
        /** Proxy server port */
        #[SerializedName('port')]
        private int $port,
        /** Pass true to immediately enable the proxy */
        #[SerializedName('enable')]
        private bool $enable,
        /** Proxy type */
        #[SerializedName('type')]
        private ProxyType|null $type = null,
    ) {
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
     * Get Pass true to immediately enable the proxy
     */
    public function getEnable(): bool
    {
        return $this->enable;
    }

    /**
     * Set Pass true to immediately enable the proxy
     */
    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get Proxy type
     */
    public function getType(): ProxyType|null
    {
        return $this->type;
    }

    /**
     * Set Proxy type
     */
    public function setType(ProxyType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addProxy',
            'server' => $this->getServer(),
            'port' => $this->getPort(),
            'enable' => $this->getEnable(),
            'type' => $this->getType(),
        ];
    }
}
