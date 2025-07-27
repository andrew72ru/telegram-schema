<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns supergroup and channel chats in which the current user has the right to post stories. The chats must be rechecked with canPostStory before actually trying to post a story there.
 */
class GetChatsToPostStories extends Chats implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatsToPostStories',
        ];
    }
}
