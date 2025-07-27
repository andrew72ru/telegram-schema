<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of hashtags @hashtags A list of hashtags.
 */
class Hashtags implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('hashtags')]
        private array|null $hashtags = null,
    ) {
    }

    public function getHashtags(): array|null
    {
        return $this->hashtags;
    }

    public function setHashtags(array|null $hashtags): self
    {
        $this->hashtags = $hashtags;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'hashtags',
            'hashtags' => $this->getHashtags(),
        ];
    }
}
