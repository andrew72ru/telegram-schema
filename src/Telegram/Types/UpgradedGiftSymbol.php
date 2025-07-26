<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a symbol shown on the pattern of an upgraded gift
 */
class UpgradedGiftSymbol implements \JsonSerializable
{
    public function __construct(
        /** Name of the symbol */
        #[SerializedName('name')]
        private string $name,
        /** The sticker representing the symbol */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
        /** The number of upgraded gifts that receive this symbol for each 1000 gifts upgraded */
        #[SerializedName('rarity_per_mille')]
        private int $rarityPerMille,
    ) {
    }

    /**
     * Get Name of the symbol
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the symbol
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get The sticker representing the symbol
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set The sticker representing the symbol
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get The number of upgraded gifts that receive this symbol for each 1000 gifts upgraded
     */
    public function getRarityPerMille(): int
    {
        return $this->rarityPerMille;
    }

    /**
     * Set The number of upgraded gifts that receive this symbol for each 1000 gifts upgraded
     */
    public function setRarityPerMille(int $rarityPerMille): self
    {
        $this->rarityPerMille = $rarityPerMille;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftSymbol',
            'name' => $this->getName(),
            'sticker' => $this->getSticker(),
            'rarity_per_mille' => $this->getRarityPerMille(),
        ];
    }
}
