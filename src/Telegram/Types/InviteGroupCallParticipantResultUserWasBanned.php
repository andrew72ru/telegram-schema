<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user can't be invited because they were banned by the owner of the call and can be invited back only by the owner of the group call.
 */
class InviteGroupCallParticipantResultUserWasBanned extends InviteGroupCallParticipantResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inviteGroupCallParticipantResultUserWasBanned',
        ];
    }
}
