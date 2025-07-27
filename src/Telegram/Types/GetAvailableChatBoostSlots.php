<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the list of available chat boost slots for the current user.
 */
class GetAvailableChatBoostSlots extends ChatBoostSlots implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAvailableChatBoostSlots',
        ];
    }
}
