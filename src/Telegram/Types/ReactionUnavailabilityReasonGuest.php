<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user isn't a member of the supergroup and can't send messages and reactions there without joining.
 */
class ReactionUnavailabilityReasonGuest extends ReactionUnavailabilityReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reactionUnavailabilityReasonGuest',
        ];
    }
}
