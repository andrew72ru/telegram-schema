<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of stickers @stickers List of stickers
 */
class Stickers implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('stickers')]
        private array|null $stickers = null,
    ) {
    }

    public function getStickers(): array|null
    {
        return $this->stickers;
    }

    public function setStickers(array|null $stickers): self
    {
        $this->stickers = $stickers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickers',
            'stickers' => $this->getStickers(),
        ];
    }
}
