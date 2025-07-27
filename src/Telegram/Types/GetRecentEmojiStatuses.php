<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns recent emoji statuses for self status.
 */
class GetRecentEmojiStatuses extends EmojiStatuses implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getRecentEmojiStatuses',
        ];
    }
}
