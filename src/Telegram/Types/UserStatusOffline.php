<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is offline @was_online Point in time (Unix timestamp) when the user was last online
 */
class UserStatusOffline extends UserStatus implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('was_online')]
        private int $wasOnline,
    ) {
    }

    public function getWasOnline(): int
    {
        return $this->wasOnline;
    }

    public function setWasOnline(int $wasOnline): self
    {
        $this->wasOnline = $wasOnline;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userStatusOffline',
            'was_online' => $this->getWasOnline(),
        ];
    }
}
