<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only messages containing URLs.
 */
class SearchMessagesFilterUrl extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterUrl',
        ];
    }
}
