<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a symbol shown on the pattern of an upgraded gift @symbol The symbol @total_count Total number of gifts with the symbol
 */
class UpgradedGiftSymbolCount implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('symbol')]
        private UpgradedGiftSymbol|null $symbol = null,
        #[SerializedName('total_count')]
        private int $totalCount,
    ) {
    }

    public function getSymbol(): UpgradedGiftSymbol|null
    {
        return $this->symbol;
    }

    public function setSymbol(UpgradedGiftSymbol|null $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftSymbolCount',
            'symbol' => $this->getSymbol(),
            'total_count' => $this->getTotalCount(),
        ];
    }
}
