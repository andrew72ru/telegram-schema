<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only messages in private chats.
 */
class SearchMessagesChatTypeFilterPrivate extends SearchMessagesChatTypeFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesChatTypeFilterPrivate',
        ];
    }
}
