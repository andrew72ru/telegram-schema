<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a proxy. Call addProxy with the given parameters to process the link and add the proxy.
 */
class InternalLinkTypeProxy extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Proxy server domain or IP address */
        #[SerializedName('server')]
        private string $server,
        /** Proxy server port */
        #[SerializedName('port')]
        private int $port,
        /** Type of the proxy */
        #[SerializedName('type')]
        private ProxyType|null $type = null,
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
     * Get Type of the proxy.
     */
    public function getType(): ProxyType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the proxy.
     */
    public function setType(ProxyType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeProxy',
            'server' => $this->getServer(),
            'port' => $this->getPort(),
            'type' => $this->getType(),
        ];
    }
}
