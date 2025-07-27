<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns all found messages, no filter is applied.
 */
class SearchMessagesFilterEmpty extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterEmpty',
        ];
    }
}
