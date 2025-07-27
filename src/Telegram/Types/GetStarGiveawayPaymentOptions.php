<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns available options for Telegram Star giveaway creation.
 */
class GetStarGiveawayPaymentOptions extends StarGiveawayPaymentOptions implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStarGiveawayPaymentOptions',
        ];
    }
}
