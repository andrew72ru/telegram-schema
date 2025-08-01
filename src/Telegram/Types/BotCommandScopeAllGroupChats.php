<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A scope covering all group and supergroup chats.
 */
class BotCommandScopeAllGroupChats extends BotCommandScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botCommandScopeAllGroupChats',
        ];
    }
}
