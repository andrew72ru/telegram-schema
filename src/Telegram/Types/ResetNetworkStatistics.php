<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Resets all network data usage statistics to zero. Can be called before authorization
 */
class ResetNetworkStatistics extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resetNetworkStatistics',
        ];
    }
}
