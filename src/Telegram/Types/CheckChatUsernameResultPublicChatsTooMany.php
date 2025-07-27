<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user has too many chats with username, one of them must be made private first.
 */
class CheckChatUsernameResultPublicChatsTooMany extends CheckChatUsernameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkChatUsernameResultPublicChatsTooMany',
        ];
    }
}
