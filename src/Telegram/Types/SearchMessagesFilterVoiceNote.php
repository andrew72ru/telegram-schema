<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only voice note messages.
 */
class SearchMessagesFilterVoiceNote extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterVoiceNote',
        ];
    }
}
