<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat is public, because it has an active username.
 */
class PublicChatTypeHasUsername extends PublicChatType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'publicChatTypeHasUsername',
        ];
    }
}
