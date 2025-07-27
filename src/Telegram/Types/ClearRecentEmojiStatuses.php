<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Clears the list of recently used emoji statuses for self status.
 */
class ClearRecentEmojiStatuses extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clearRecentEmojiStatuses',
        ];
    }
}
