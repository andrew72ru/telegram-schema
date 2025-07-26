<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A different network type (e.g., Ethernet network)
 */
class NetworkTypeOther extends NetworkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'networkTypeOther',
        ];
    }
}
