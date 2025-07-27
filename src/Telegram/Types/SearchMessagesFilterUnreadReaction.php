<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only messages with unread reactions for the current user. When using this filter the results can't be additionally filtered by a query, a message thread or by the sending user.
 */
class SearchMessagesFilterUnreadReaction extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterUnreadReaction',
        ];
    }
}
