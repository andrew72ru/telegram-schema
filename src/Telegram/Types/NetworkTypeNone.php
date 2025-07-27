<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The network is not available.
 */
class NetworkTypeNone extends NetworkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'networkTypeNone',
        ];
    }
}
