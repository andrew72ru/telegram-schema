<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns recently searched for hashtags or cashtags by their prefix @tag_prefix Prefix of hashtags or cashtags to return @limit The maximum number of items to be returned.
 */
class GetSearchedForTags extends Hashtags implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('tag_prefix')]
        private string $tagPrefix,
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    public function getTagPrefix(): string
    {
        return $this->tagPrefix;
    }

    public function setTagPrefix(string $tagPrefix): self
    {
        $this->tagPrefix = $tagPrefix;

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
            '@type' => 'getSearchedForTags',
            'tag_prefix' => $this->getTagPrefix(),
            'limit' => $this->getLimit(),
        ];
    }
}
