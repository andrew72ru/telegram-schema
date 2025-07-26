<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The author and publishing date of a page @author Author @publish_date Point in time (Unix timestamp) when the article was published; 0 if unknown
 */
class PageBlockAuthorDate extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('author')]
        private RichText|null $author = null,
        #[SerializedName('publish_date')]
        private int $publishDate,
    ) {
    }

    public function getAuthor(): RichText|null
    {
        return $this->author;
    }

    public function setAuthor(RichText|null $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getPublishDate(): int
    {
        return $this->publishDate;
    }

    public function setPublishDate(int $publishDate): self
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockAuthorDate',
            'author' => $this->getAuthor(),
            'publish_date' => $this->getPublishDate(),
        ];
    }
}
