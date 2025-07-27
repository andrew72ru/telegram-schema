<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Downloading data expected to be received while the application was offline.
 */
class ConnectionStateUpdating extends ConnectionState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectionStateUpdating',
        ];
    }
}
