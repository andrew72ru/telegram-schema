<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A scope covering all group and supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators extends BotCommandScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botCommandScopeAllChatAdministrators',
        ];
    }
}
