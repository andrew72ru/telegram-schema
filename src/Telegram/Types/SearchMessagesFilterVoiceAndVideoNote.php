<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only voice and video note messages.
 */
class SearchMessagesFilterVoiceAndVideoNote extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterVoiceAndVideoNote',
        ];
    }
}
