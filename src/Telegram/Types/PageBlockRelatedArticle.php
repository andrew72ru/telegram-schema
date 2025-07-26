<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a related article
 */
class PageBlockRelatedArticle implements \JsonSerializable
{
    public function __construct(
        /** Related article URL */
        #[SerializedName('url')]
        private string $url,
        /** Article title; may be empty */
        #[SerializedName('title')]
        private string $title,
        /** Contains information about a related article */
        #[SerializedName('description')]
        private string $description,
        /** Article photo; may be null */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Article author; may be empty */
        #[SerializedName('author')]
        private string $author,
        /** Point in time (Unix timestamp) when the article was published; 0 if unknown */
        #[SerializedName('publish_date')]
        private int $publishDate,
    ) {
    }

    /**
     * Get Related article URL
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set Related article URL
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Article title; may be empty
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Article title; may be empty
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Contains information about a related article
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Contains information about a related article
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Article photo; may be null
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Article photo; may be null
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Article author; may be empty
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set Article author; may be empty
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the article was published; 0 if unknown
     */
    public function getPublishDate(): int
    {
        return $this->publishDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the article was published; 0 if unknown
     */
    public function setPublishDate(int $publishDate): self
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockRelatedArticle',
            'url' => $this->getUrl(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'photo' => $this->getPhoto(),
            'author' => $this->getAuthor(),
            'publish_date' => $this->getPublishDate(),
        ];
    }
}
