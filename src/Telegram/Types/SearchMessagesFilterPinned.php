<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only pinned messages.
 */
class SearchMessagesFilterPinned extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterPinned',
        ];
    }
}
