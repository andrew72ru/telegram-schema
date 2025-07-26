<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns saved order information. Returns a 404 error if there is no saved order information
 */
class GetSavedOrderInfo extends OrderInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSavedOrderInfo',
        ];
    }
}
