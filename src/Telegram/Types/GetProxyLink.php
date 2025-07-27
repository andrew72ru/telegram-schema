<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTPS link, which can be used to add a proxy. Available only for SOCKS5 and MTProto proxies. Can be called before authorization @proxy_id Proxy identifier.
 */
class GetProxyLink extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('proxy_id')]
        private int $proxyId,
    ) {
    }

    public function getProxyId(): int
    {
        return $this->proxyId;
    }

    public function setProxyId(int $proxyId): self
    {
        $this->proxyId = $proxyId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getProxyLink',
            'proxy_id' => $this->getProxyId(),
        ];
    }
}
