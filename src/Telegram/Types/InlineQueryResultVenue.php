<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents information about a venue
 */
class InlineQueryResultVenue extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Venue result */
        #[SerializedName('venue')]
        private Venue|null $venue = null,
        /** Result thumbnail in JPEG format; may be null */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
    ) {
    }

    /**
     * Get Unique identifier of the query result
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Venue result
     */
    public function getVenue(): Venue|null
    {
        return $this->venue;
    }

    /**
     * Set Venue result
     */
    public function setVenue(Venue|null $venue): self
    {
        $this->venue = $venue;

        return $this;
    }

    /**
     * Get Result thumbnail in JPEG format; may be null
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Result thumbnail in JPEG format; may be null
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultVenue',
            'id' => $this->getId(),
            'venue' => $this->getVenue(),
            'thumbnail' => $this->getThumbnail(),
        ];
    }
}
