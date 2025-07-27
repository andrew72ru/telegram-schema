<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A category containing frequently used chats used for calls.
 */
class TopChatCategoryCalls extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryCalls',
        ];
    }
}
