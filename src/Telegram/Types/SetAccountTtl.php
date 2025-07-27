<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the period of inactivity after which the account of the current user will automatically be deleted @ttl New account TTL.
 */
class SetAccountTtl extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('ttl')]
        private AccountTtl|null $ttl = null,
    ) {
    }

    public function getTtl(): AccountTtl|null
    {
        return $this->ttl;
    }

    public function setTtl(AccountTtl|null $ttl): self
    {
        $this->ttl = $ttl;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setAccountTtl',
            'ttl' => $this->getTtl(),
        ];
    }
}
