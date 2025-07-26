<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the bio of a business account; for bots only
 */
class SetBusinessAccountBio extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The new value of the bio; 0-getOption("bio_length_max") characters without line feeds */
        #[SerializedName('bio')]
        private string $bio,
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
     * Get The new value of the bio; 0-getOption("bio_length_max") characters without line feeds
     */
    public function getBio(): string
    {
        return $this->bio;
    }

    /**
     * Set The new value of the bio; 0-getOption("bio_length_max") characters without line feeds
     */
    public function setBio(string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessAccountBio',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'bio' => $this->getBio(),
        ];
    }
}
