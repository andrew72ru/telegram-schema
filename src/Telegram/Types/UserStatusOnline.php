<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is online @expires Point in time (Unix timestamp) when the user's online status will expire
 */
class UserStatusOnline extends UserStatus implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('expires')]
        private int $expires,
    ) {
    }

    public function getExpires(): int
    {
        return $this->expires;
    }

    public function setExpires(int $expires): self
    {
        $this->expires = $expires;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userStatusOnline',
            'expires' => $this->getExpires(),
        ];
    }
}
