<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A category containing frequently used private chats with non-bot users.
 */
class TopChatCategoryUsers extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryUsers',
        ];
    }
}
