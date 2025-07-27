<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user can't be invited because they are already a participant of the call.
 */
class InviteGroupCallParticipantResultUserAlreadyParticipant extends InviteGroupCallParticipantResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inviteGroupCallParticipantResultUserAlreadyParticipant',
        ];
    }
}
