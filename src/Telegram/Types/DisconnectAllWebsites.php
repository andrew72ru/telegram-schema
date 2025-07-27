<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Disconnects all websites from the current user's Telegram account.
 */
class DisconnectAllWebsites extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'disconnectAllWebsites',
        ];
    }
}
