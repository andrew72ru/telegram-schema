<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The network is not available
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
