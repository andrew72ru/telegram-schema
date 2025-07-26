<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Establishing a connection with a proxy server
 */
class ConnectionStateConnectingToProxy extends ConnectionState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectionStateConnectingToProxy',
        ];
    }
}
