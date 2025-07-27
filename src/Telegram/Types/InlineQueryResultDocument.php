<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a document.
 */
class InlineQueryResultDocument extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Document */
        #[SerializedName('document')]
        private Document|null $document = null,
        /** Document title */
        #[SerializedName('title')]
        private string $title,
        /** Represents a document */
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
     * Get Document.
     */
    public function getDocument(): Document|null
    {
        return $this->document;
    }

    /**
     * Set Document.
     */
    public function setDocument(Document|null $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get Document title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Document title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Represents a document.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Represents a document.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultDocument',
            'id' => $this->getId(),
            'document' => $this->getDocument(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
        ];
    }
}
