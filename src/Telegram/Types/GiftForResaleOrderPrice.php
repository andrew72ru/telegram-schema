<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The gifts will be sorted by their price from the lowest to the highest.
 */
class GiftForResaleOrderPrice extends GiftForResaleOrder implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giftForResaleOrderPrice',
        ];
    }
}
