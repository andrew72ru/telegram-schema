<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only video messages.
 */
class SearchMessagesFilterVideo extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterVideo',
        ];
    }
}
