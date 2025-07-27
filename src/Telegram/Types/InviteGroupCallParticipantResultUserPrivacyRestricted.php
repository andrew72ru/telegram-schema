<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user can't be invited due to their privacy settings.
 */
class InviteGroupCallParticipantResultUserPrivacyRestricted extends InviteGroupCallParticipantResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inviteGroupCallParticipantResultUserPrivacyRestricted',
        ];
    }
}
