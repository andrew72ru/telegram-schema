<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Computes time needed to receive a response from a Telegram server through a proxy. Can be called before authorization @proxy_id Proxy identifier. Use 0 to ping a Telegram server without a proxy
 */
class PingProxy extends Seconds implements \JsonSerializable
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
            '@type' => 'pingProxy',
            'proxy_id' => $this->getProxyId(),
        ];
    }
}
