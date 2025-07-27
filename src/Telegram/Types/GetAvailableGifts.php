<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns gifts that can be sent to other users and channel chats.
 */
class GetAvailableGifts extends AvailableGifts implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAvailableGifts',
        ];
    }
}
