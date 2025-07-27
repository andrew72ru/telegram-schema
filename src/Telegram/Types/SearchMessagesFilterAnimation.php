<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only animation messages.
 */
class SearchMessagesFilterAnimation extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterAnimation',
        ];
    }
}
