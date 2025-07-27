<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a backdrop of an upgraded gift.
 */
class UpgradedGiftBackdrop implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the backdrop */
        #[SerializedName('id')]
        private int $id,
        /** Name of the backdrop */
        #[SerializedName('name')]
        private string $name,
        /** Colors of the backdrop */
        #[SerializedName('colors')]
        private UpgradedGiftBackdropColors|null $colors = null,
        /** The number of upgraded gifts that receive this backdrop for each 1000 gifts upgraded */
        #[SerializedName('rarity_per_mille')]
        private int $rarityPerMille,
    ) {
    }

    /**
     * Get Unique identifier of the backdrop.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the backdrop.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Name of the backdrop.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the backdrop.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Colors of the backdrop.
     */
    public function getColors(): UpgradedGiftBackdropColors|null
    {
        return $this->colors;
    }

    /**
     * Set Colors of the backdrop.
     */
    public function setColors(UpgradedGiftBackdropColors|null $colors): self
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * Get The number of upgraded gifts that receive this backdrop for each 1000 gifts upgraded.
     */
    public function getRarityPerMille(): int
    {
        return $this->rarityPerMille;
    }

    /**
     * Set The number of upgraded gifts that receive this backdrop for each 1000 gifts upgraded.
     */
    public function setRarityPerMille(int $rarityPerMille): self
    {
        $this->rarityPerMille = $rarityPerMille;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftBackdrop',
            'id' => $this->getId(),
            'name' => $this->getName(),
            'colors' => $this->getColors(),
            'rarity_per_mille' => $this->getRarityPerMille(),
        ];
    }
}
