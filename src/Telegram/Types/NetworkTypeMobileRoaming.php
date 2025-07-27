<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A mobile roaming network.
 */
class NetworkTypeMobileRoaming extends NetworkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'networkTypeMobileRoaming',
        ];
    }
}
