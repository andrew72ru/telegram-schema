<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user can't be a member of a public supergroup.
 */
class CheckChatUsernameResultPublicGroupsUnavailable extends CheckChatUsernameResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkChatUsernameResultPublicGroupsUnavailable',
        ];
    }
}
