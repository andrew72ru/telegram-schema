<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only messages containing chat photos.
 */
class SearchMessagesFilterChatPhoto extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterChatPhoto',
        ];
    }
}
