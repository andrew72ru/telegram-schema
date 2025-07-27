<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a link to an article or web page.
 */
class InlineQueryResultArticle extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** URL of the result, if it exists */
        #[SerializedName('url')]
        private string $url,
        /** Title of the result */
        #[SerializedName('title')]
        private string $title,
        /** Represents a link to an article or web page */
        #[SerializedName('description')]
        private string $description,
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
     * Get URL of the result, if it exists.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of the result, if it exists.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Title of the result.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the result.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Represents a link to an article or web page.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Represents a link to an article or web page.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

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
            '@type' => 'inlineQueryResultArticle',
            'id' => $this->getId(),
            'url' => $this->getUrl(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'thumbnail' => $this->getThumbnail(),
        ];
    }
}
