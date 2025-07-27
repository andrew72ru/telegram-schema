<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a user contact.
 */
class InlineQueryResultContact extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** A user contact */
        #[SerializedName('contact')]
        private Contact|null $contact = null,
        /** Result thumbnail in JPEG format; may be null */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
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
     * Get A user contact.
     */
    public function getContact(): Contact|null
    {
        return $this->contact;
    }

    /**
     * Set A user contact.
     */
    public function setContact(Contact|null $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get Result thumbnail in JPEG format; may be null.
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Result thumbnail in JPEG format; may be null.
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultContact',
            'id' => $this->getId(),
            'contact' => $this->getContact(),
            'thumbnail' => $this->getThumbnail(),
        ];
    }
}
