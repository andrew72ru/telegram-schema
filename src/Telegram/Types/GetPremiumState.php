<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns state of Telegram Premium subscription and promotion videos for Premium features.
 */
class GetPremiumState extends PremiumState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPremiumState',
        ];
    }
}
