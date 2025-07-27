<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An embedded post.
 */
class PageBlockEmbeddedPost extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** URL of the embedded post */
        #[SerializedName('url')]
        private string $url,
        /** Post author */
        #[SerializedName('author')]
        private string $author,
        /** Post author photo; may be null */
        #[SerializedName('author_photo')]
        private Photo|null $authorPhoto = null,
        /** Point in time (Unix timestamp) when the post was created; 0 if unknown */
        #[SerializedName('date')]
        private int $date,
        /** Post content */
        #[SerializedName('page_blocks')]
        private array|null $pageBlocks = null,
        /** Post caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
    ) {
    }

    /**
     * Get URL of the embedded post.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of the embedded post.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Post author.
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set Post author.
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get Post author photo; may be null.
     */
    public function getAuthorPhoto(): Photo|null
    {
        return $this->authorPhoto;
    }

    /**
     * Set Post author photo; may be null.
     */
    public function setAuthorPhoto(Photo|null $authorPhoto): self
    {
        $this->authorPhoto = $authorPhoto;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the post was created; 0 if unknown.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the post was created; 0 if unknown.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Post content.
     */
    public function getPageBlocks(): array|null
    {
        return $this->pageBlocks;
    }

    /**
     * Set Post content.
     */
    public function setPageBlocks(array|null $pageBlocks): self
    {
        $this->pageBlocks = $pageBlocks;

        return $this;
    }

    /**
     * Get Post caption.
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Post caption.
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockEmbeddedPost',
            'url' => $this->getUrl(),
            'author' => $this->getAuthor(),
            'author_photo' => $this->getAuthorPhoto(),
            'date' => $this->getDate(),
            'page_blocks' => $this->getPageBlocks(),
            'caption' => $this->getCaption(),
        ];
    }
}
