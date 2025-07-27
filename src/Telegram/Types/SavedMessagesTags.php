<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of tags used in Saved Messages @tags List of tags.
 */
class SavedMessagesTags implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('tags')]
        private array|null $tags = null,
    ) {
    }

    public function getTags(): array|null
    {
        return $this->tags;
    }

    public function setTags(array|null $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'savedMessagesTags',
            'tags' => $this->getTags(),
        ];
    }
}
