<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a hashtag from the list of recently used hashtags @hashtag Hashtag to delete
 */
class RemoveRecentHashtag extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('hashtag')]
        private string $hashtag,
    ) {
    }

    public function getHashtag(): string
    {
        return $this->hashtag;
    }

    public function setHashtag(string $hashtag): self
    {
        $this->hashtag = $hashtag;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeRecentHashtag',
            'hashtag' => $this->getHashtag(),
        ];
    }
}
