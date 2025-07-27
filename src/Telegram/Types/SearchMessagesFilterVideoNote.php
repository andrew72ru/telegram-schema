<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only video note messages.
 */
class SearchMessagesFilterVideoNote extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterVideoNote',
        ];
    }
}
