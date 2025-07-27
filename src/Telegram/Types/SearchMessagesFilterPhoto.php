<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only photo messages.
 */
class SearchMessagesFilterPhoto extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterPhoto',
        ];
    }
}
