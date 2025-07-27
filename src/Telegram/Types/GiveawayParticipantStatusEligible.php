<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user is eligible for the giveaway.
 */
class GiveawayParticipantStatusEligible extends GiveawayParticipantStatus implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giveawayParticipantStatusEligible',
        ];
    }
}
