<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A category containing frequently used chats used to forward messages.
 */
class TopChatCategoryForwardChats extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryForwardChats',
        ];
    }
}
