<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns all active sessions of the current user.
 */
class GetActiveSessions extends Sessions implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getActiveSessions',
        ];
    }
}
