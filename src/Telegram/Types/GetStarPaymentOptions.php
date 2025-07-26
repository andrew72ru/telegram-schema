<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns available options for Telegram Stars purchase
 */
class GetStarPaymentOptions extends StarPaymentOptions implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStarPaymentOptions',
        ];
    }
}
