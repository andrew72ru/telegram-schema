<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A category containing frequently used chats with bots, which Web Apps were opened.
 */
class TopChatCategoryWebAppBots extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryWebAppBots',
        ];
    }
}
