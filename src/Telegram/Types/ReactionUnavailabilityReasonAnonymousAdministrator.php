<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user is an anonymous administrator in the supergroup, but isn't a creator of it, so they can't vote on behalf of the supergroup.
 */
class ReactionUnavailabilityReasonAnonymousAdministrator extends ReactionUnavailabilityReason implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reactionUnavailabilityReasonAnonymousAdministrator',
        ];
    }
}
