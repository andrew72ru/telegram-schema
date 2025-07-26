<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Enables a proxy. Only one proxy can be enabled at a time. Can be called before authorization @proxy_id Proxy identifier
 */
class EnableProxy extends Ok implements \JsonSerializable
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
            '@type' => 'enableProxy',
            'proxy_id' => $this->getProxyId(),
        ];
    }
}
