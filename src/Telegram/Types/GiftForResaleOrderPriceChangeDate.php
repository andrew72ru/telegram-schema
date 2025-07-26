<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The gifts will be sorted by the last date when their price was changed from the newest to the oldest
 */
class GiftForResaleOrderPriceChangeDate extends GiftForResaleOrder implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giftForResaleOrderPriceChangeDate',
        ];
    }
}
