<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns premium stickers from regular sticker sets @limit The maximum number of stickers to be returned; 0-100
 */
class GetPremiumStickers extends Stickers implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('limit')]
        private int $limit,
    ) {
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
            '@type' => 'getPremiumStickers',
            'limit' => $this->getLimit(),
        ];
    }
}
