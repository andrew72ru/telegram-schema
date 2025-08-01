<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * There is a working connection to the Telegram servers.
 */
class ConnectionStateReady extends ConnectionState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectionStateReady',
        ];
    }
}
