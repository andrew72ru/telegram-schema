<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Wi-Fi network
 */
class NetworkTypeWiFi extends NetworkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'networkTypeWiFi',
        ];
    }
}
