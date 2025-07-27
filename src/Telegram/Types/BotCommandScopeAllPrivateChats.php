<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A scope covering all private chats.
 */
class BotCommandScopeAllPrivateChats extends BotCommandScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botCommandScopeAllPrivateChats',
        ];
    }
}
