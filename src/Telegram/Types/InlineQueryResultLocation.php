<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a point on the map
 */
class InlineQueryResultLocation extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Location result */
        #[SerializedName('location')]
        private Location|null $location = null,
        /** Title of the result */
        #[SerializedName('title')]
        private string $title,
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
     * Get Location result
     */
    public function getLocation(): Location|null
    {
        return $this->location;
    }

    /**
     * Set Location result
     */
    public function setLocation(Location|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get Title of the result
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the result
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

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
            '@type' => 'inlineQueryResultLocation',
            'id' => $this->getId(),
            'location' => $this->getLocation(),
            'title' => $this->getTitle(),
            'thumbnail' => $this->getThumbnail(),
        ];
    }
}
