<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of proxy servers @proxies List of proxy servers
 */
class Proxies implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('proxies')]
        private array|null $proxies = null,
    ) {
    }

    public function getProxies(): array|null
    {
        return $this->proxies;
    }

    public function setProxies(array|null $proxies): self
    {
        $this->proxies = $proxies;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'proxies',
            'proxies' => $this->getProxies(),
        ];
    }
}
