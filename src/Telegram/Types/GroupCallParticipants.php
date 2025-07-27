<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains identifiers of group call participants @total_count Total number of group call participants @participant_ids Identifiers of the participants.
 */
class GroupCallParticipants implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('participant_ids')]
        private array|null $participantIds = null,
    ) {
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getParticipantIds(): array|null
    {
        return $this->participantIds;
    }

    public function setParticipantIds(array|null $participantIds): self
    {
        $this->participantIds = $participantIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallParticipants',
            'total_count' => $this->getTotalCount(),
            'participant_ids' => $this->getParticipantIds(),
        ];
    }
}
