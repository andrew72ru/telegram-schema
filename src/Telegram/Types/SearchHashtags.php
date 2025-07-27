<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for recently used hashtags by their prefix @prefix Hashtag prefix to search for @limit The maximum number of hashtags to be returned.
 */
class SearchHashtags extends Hashtags implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('prefix')]
        private string $prefix,
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function setPrefix(string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchHashtags',
            'prefix' => $this->getPrefix(),
            'limit' => $this->getLimit(),
        ];
    }
}
