<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A category containing frequently used private chats with bot users.
 */
class TopChatCategoryBots extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryBots',
        ];
    }
}
