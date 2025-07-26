<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for a sticker set by its name @name Name of the sticker set @ignore_cache Pass true to ignore local cache of sticker sets and always send a network request
 */
class SearchStickerSet extends StickerSet implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
        #[SerializedName('ignore_cache')]
        private bool $ignoreCache,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIgnoreCache(): bool
    {
        return $this->ignoreCache;
    }

    public function setIgnoreCache(bool $ignoreCache): self
    {
        $this->ignoreCache = $ignoreCache;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchStickerSet',
            'name' => $this->getName(),
            'ignore_cache' => $this->getIgnoreCache(),
        ];
    }
}
