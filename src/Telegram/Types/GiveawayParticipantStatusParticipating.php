<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user participates in the giveaway
 */
class GiveawayParticipantStatusParticipating extends GiveawayParticipantStatus implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giveawayParticipantStatusParticipating',
        ];
    }
}
