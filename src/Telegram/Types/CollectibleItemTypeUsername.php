<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A username @username The username.
 */
class CollectibleItemTypeUsername extends CollectibleItemType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('username')]
        private string $username,
    ) {
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'collectibleItemTypeUsername',
            'username' => $this->getUsername(),
        ];
    }
}
