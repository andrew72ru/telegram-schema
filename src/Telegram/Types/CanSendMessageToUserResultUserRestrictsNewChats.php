<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user can't be messaged, because they restrict new chats with non-contacts.
 */
class CanSendMessageToUserResultUserRestrictsNewChats extends CanSendMessageToUserResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canSendMessageToUserResultUserRestrictsNewChats',
        ];
    }
}
