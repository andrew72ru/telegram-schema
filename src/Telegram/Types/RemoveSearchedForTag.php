<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a hashtag or a cashtag from the list of recently searched for hashtags or cashtags @tag Hashtag or cashtag to delete.
 */
class RemoveSearchedForTag extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('tag')]
        private string $tag,
    ) {
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeSearchedForTag',
            'tag' => $this->getTag(),
        ];
    }
}
