<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An MTProto proxy server @secret The proxy's secret in hexadecimal encoding
 */
class ProxyTypeMtproto extends ProxyType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('secret')]
        private string $secret,
    ) {
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function setSecret(string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'proxyTypeMtproto',
            'secret' => $this->getSecret(),
        ];
    }
}
