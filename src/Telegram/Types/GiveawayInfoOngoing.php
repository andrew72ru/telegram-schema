<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an ongoing giveaway
 */
class GiveawayInfoOngoing extends GiveawayInfo implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the giveaway was created */
        #[SerializedName('creation_date')]
        private int $creationDate,
        /** Status of the current user in the giveaway */
        #[SerializedName('status')]
        private GiveawayParticipantStatus|null $status = null,
        /** True, if the giveaway has ended and results are being prepared */
        #[SerializedName('is_ended')]
        private bool $isEnded,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the giveaway was created
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the giveaway was created
     */
    public function setCreationDate(int $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get Status of the current user in the giveaway
     */
    public function getStatus(): GiveawayParticipantStatus|null
    {
        return $this->status;
    }

    /**
     * Set Status of the current user in the giveaway
     */
    public function setStatus(GiveawayParticipantStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get True, if the giveaway has ended and results are being prepared
     */
    public function getIsEnded(): bool
    {
        return $this->isEnded;
    }

    /**
     * Set True, if the giveaway has ended and results are being prepared
     */
    public function setIsEnded(bool $isEnded): self
    {
        $this->isEnded = $isEnded;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giveawayInfoOngoing',
            'creation_date' => $this->getCreationDate(),
            'status' => $this->getStatus(),
            'is_ended' => $this->getIsEnded(),
        ];
    }
}
