<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Waiting for the network to become available. Use setNetworkType to change the available network type
 */
class ConnectionStateWaitingForNetwork extends ConnectionState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectionStateWaitingForNetwork',
        ];
    }
}
