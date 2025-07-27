<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A scope covering all users.
 */
class BotCommandScopeDefault extends BotCommandScope implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botCommandScopeDefault',
        ];
    }
}
