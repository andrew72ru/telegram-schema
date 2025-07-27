<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a photo.
 */
class InlineQueryResultPhoto extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Photo */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Title of the result, if known */
        #[SerializedName('title')]
        private string $title,
        /** Represents a photo */
        #[SerializedName('description')]
        private string $description,
    ) {
    }

    /**
     * Get Unique identifier of the query result.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Photo.
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Photo.
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Title of the result, if known.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the result, if known.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Represents a photo.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Represents a photo.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultPhoto',
            'id' => $this->getId(),
            'photo' => $this->getPhoto(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
        ];
    }
}
