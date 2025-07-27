<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only audio messages.
 */
class SearchMessagesFilterAudio extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterAudio',
        ];
    }
}
