<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of available TDLib internal log tags @tags List of log tags
 */
class LogTags implements \JsonSerializable
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
            '@type' => 'logTags',
            'tags' => $this->getTags(),
        ];
    }
}
