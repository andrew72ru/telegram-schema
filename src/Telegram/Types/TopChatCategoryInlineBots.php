<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A category containing frequently used chats with inline bots sorted by their usage in inline mode.
 */
class TopChatCategoryInlineBots extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryInlineBots',
        ];
    }
}
