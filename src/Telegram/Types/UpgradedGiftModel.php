<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a model of an upgraded gift
 */
class UpgradedGiftModel implements \JsonSerializable
{
    public function __construct(
        /** Name of the model */
        #[SerializedName('name')]
        private string $name,
        /** The sticker representing the upgraded gift */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
        /** The number of upgraded gifts that receive this model for each 1000 gifts upgraded */
        #[SerializedName('rarity_per_mille')]
        private int $rarityPerMille,
    ) {
    }

    /**
     * Get Name of the model
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the model
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get The sticker representing the upgraded gift
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set The sticker representing the upgraded gift
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get The number of upgraded gifts that receive this model for each 1000 gifts upgraded
     */
    public function getRarityPerMille(): int
    {
        return $this->rarityPerMille;
    }

    /**
     * Set The number of upgraded gifts that receive this model for each 1000 gifts upgraded
     */
    public function setRarityPerMille(int $rarityPerMille): self
    {
        $this->rarityPerMille = $rarityPerMille;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftModel',
            'name' => $this->getName(),
            'sticker' => $this->getSticker(),
            'rarity_per_mille' => $this->getRarityPerMille(),
        ];
    }
}
