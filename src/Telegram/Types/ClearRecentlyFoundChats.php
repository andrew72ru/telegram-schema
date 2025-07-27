<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Clears the list of recently found chats.
 */
class ClearRecentlyFoundChats extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clearRecentlyFoundChats',
        ];
    }
}
