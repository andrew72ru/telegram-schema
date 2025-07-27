<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The username can be set.
 */
class CheckChatUsernameResultOk extends CheckChatUsernameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkChatUsernameResultOk',
        ];
    }
}
