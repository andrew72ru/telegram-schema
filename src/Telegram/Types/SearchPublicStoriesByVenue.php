<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for public stories from the given venue. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
 */
class SearchPublicStoriesByVenue extends FoundStories implements \JsonSerializable
{
    public function __construct(
        /** Provider of the venue */
        #[SerializedName('venue_provider')]
        private string $venueProvider,
        /** Identifier of the venue in the provider database */
        #[SerializedName('venue_id')]
        private string $venueId,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of stories to be returned; up to 100. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
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

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of stories to be returned; up to 100. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of stories to be returned; up to 100. For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchPublicStoriesByVenue',
            'venue_provider' => $this->getVenueProvider(),
            'venue_id' => $this->getVenueId(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
