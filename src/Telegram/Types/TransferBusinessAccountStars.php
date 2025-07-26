<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Transfer Telegram Stars from the business account to the business bot; for bots only
 */
class TransferBusinessAccountStars extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Number of Telegram Stars to transfer */
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    /**
     * Get Unique identifier of business connection
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get Number of Telegram Stars to transfer
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars to transfer
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'transferBusinessAccountStars',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
