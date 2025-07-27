<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The username is occupied.
 */
class CheckChatUsernameResultUsernameOccupied extends CheckChatUsernameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkChatUsernameResultUsernameOccupied',
        ];
    }
}
