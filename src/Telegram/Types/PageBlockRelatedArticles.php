<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Related articles.
 */
class PageBlockRelatedArticles extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Block header */
        #[SerializedName('header')]
        private RichText|null $header = null,
        /** List of related articles */
        #[SerializedName('articles')]
        private array|null $articles = null,
    ) {
    }

    /**
     * Get Block header.
     */
    public function getHeader(): RichText|null
    {
        return $this->header;
    }

    /**
     * Set Block header.
     */
    public function setHeader(RichText|null $header): self
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Get List of related articles.
     */
    public function getArticles(): array|null
    {
        return $this->articles;
    }

    /**
     * Set List of related articles.
     */
    public function setArticles(array|null $articles): self
    {
        $this->articles = $articles;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockRelatedArticles',
            'header' => $this->getHeader(),
            'articles' => $this->getArticles(),
        ];
    }
}
