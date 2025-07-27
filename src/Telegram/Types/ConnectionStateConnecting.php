<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Establishing a connection to the Telegram servers.
 */
class ConnectionStateConnecting extends ConnectionState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectionStateConnecting',
        ];
    }
}
