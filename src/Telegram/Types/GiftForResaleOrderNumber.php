<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The gifts will be sorted by their number from the smallest to the largest.
 */
class GiftForResaleOrderNumber extends GiftForResaleOrder implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giftForResaleOrderNumber',
        ];
    }
}
