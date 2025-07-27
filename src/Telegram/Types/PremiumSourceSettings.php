<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A user opened the Premium features screen from settings.
 */
class PremiumSourceSettings extends PremiumSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumSourceSettings',
        ];
    }
}
