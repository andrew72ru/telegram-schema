<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The username is invalid.
 */
class CheckChatUsernameResultUsernameInvalid extends CheckChatUsernameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkChatUsernameResultUsernameInvalid',
        ];
    }
}
