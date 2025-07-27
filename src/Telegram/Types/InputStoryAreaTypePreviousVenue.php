<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area pointing to a venue already added to the story.
 */
class InputStoryAreaTypePreviousVenue extends InputStoryAreaType implements \JsonSerializable
{
    public function __construct(
        /** Provider of the venue */
        #[SerializedName('venue_provider')]
        private string $venueProvider,
        /** Identifier of the venue in the provider database */
        #[SerializedName('venue_id')]
        private string $venueId,
    ) {
    }

    /**
     * Get Provider of the venue.
     */
    public function getVenueProvider(): string
    {
        return $this->venueProvider;
    }

    /**
     * Set Provider of the venue.
     */
    public function setVenueProvider(string $venueProvider): self
    {
        $this->venueProvider = $venueProvider;

        return $this;
    }

    /**
     * Get Identifier of the venue in the provider database.
     */
    public function getVenueId(): string
    {
        return $this->venueId;
    }

    /**
     * Set Identifier of the venue in the provider database.
     */
    public function setVenueId(string $venueId): self
    {
        $this->venueId = $venueId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryAreaTypePreviousVenue',
            'venue_provider' => $this->getVenueProvider(),
            'venue_id' => $this->getVenueId(),
        ];
    }
}
