<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A scope covering all users
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
