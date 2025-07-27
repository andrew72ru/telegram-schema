<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the business bot that is connected to the current user account. Returns a 404 error if there is no connected bot.
 */
class GetBusinessConnectedBot extends BusinessConnectedBot implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBusinessConnectedBot',
        ];
    }
}
