<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes colors of a backdrop of an upgraded gift
 */
class UpgradedGiftBackdropColors implements \JsonSerializable
{
    public function __construct(
        /** A color in the center of the backdrop in the RGB format */
        #[SerializedName('center_color')]
        private int $centerColor,
        /** A color on the edges of the backdrop in the RGB format */
        #[SerializedName('edge_color')]
        private int $edgeColor,
        /** A color to be applied for the symbol in the RGB format */
        #[SerializedName('symbol_color')]
        private int $symbolColor,
        /** A color for the text on the backdrop in the RGB format */
        #[SerializedName('text_color')]
        private int $textColor,
    ) {
    }

    /**
     * Get A color in the center of the backdrop in the RGB format
     */
    public function getCenterColor(): int
    {
        return $this->centerColor;
    }

    /**
     * Set A color in the center of the backdrop in the RGB format
     */
    public function setCenterColor(int $centerColor): self
    {
        $this->centerColor = $centerColor;

        return $this;
    }

    /**
     * Get A color on the edges of the backdrop in the RGB format
     */
    public function getEdgeColor(): int
    {
        return $this->edgeColor;
    }

    /**
     * Set A color on the edges of the backdrop in the RGB format
     */
    public function setEdgeColor(int $edgeColor): self
    {
        $this->edgeColor = $edgeColor;

        return $this;
    }

    /**
     * Get A color to be applied for the symbol in the RGB format
     */
    public function getSymbolColor(): int
    {
        return $this->symbolColor;
    }

    /**
     * Set A color to be applied for the symbol in the RGB format
     */
    public function setSymbolColor(int $symbolColor): self
    {
        $this->symbolColor = $symbolColor;

        return $this;
    }

    /**
     * Get A color for the text on the backdrop in the RGB format
     */
    public function getTextColor(): int
    {
        return $this->textColor;
    }

    /**
     * Set A color for the text on the backdrop in the RGB format
     */
    public function setTextColor(int $textColor): self
    {
        $this->textColor = $textColor;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'upgradedGiftBackdropColors',
            'center_color' => $this->getCenterColor(),
            'edge_color' => $this->getEdgeColor(),
            'symbol_color' => $this->getSymbolColor(),
            'text_color' => $this->getTextColor(),
        ];
    }
}
