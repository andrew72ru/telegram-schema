<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns all close friends of the current user.
 */
class GetCloseFriends extends Users implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCloseFriends',
        ];
    }
}
