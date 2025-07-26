<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A PNG or TGV (gzipped subset of SVG with MIME type "application/x-tgwallpattern") pattern to be combined with the background fill chosen by the user
 */
class BackgroundTypePattern extends BackgroundType implements \JsonSerializable
{
    public function __construct(
        /** Fill of the background */
        #[SerializedName('fill')]
        private BackgroundFill|null $fill = null,
        /** Intensity of the pattern when it is shown above the filled background; 0-100 */
        #[SerializedName('intensity')]
        private int $intensity,
        /** True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only */
        #[SerializedName('is_inverted')]
        private bool $isInverted,
        /** True, if the background needs to be slightly moved when device is tilted */
        #[SerializedName('is_moving')]
        private bool $isMoving,
    ) {
    }

    /**
     * Get Fill of the background
     */
    public function getFill(): BackgroundFill|null
    {
        return $this->fill;
    }

    /**
     * Set Fill of the background
     */
    public function setFill(BackgroundFill|null $fill): self
    {
        $this->fill = $fill;

        return $this;
    }

    /**
     * Get Intensity of the pattern when it is shown above the filled background; 0-100
     */
    public function getIntensity(): int
    {
        return $this->intensity;
    }

    /**
     * Set Intensity of the pattern when it is shown above the filled background; 0-100
     */
    public function setIntensity(int $intensity): self
    {
        $this->intensity = $intensity;

        return $this;
    }

    /**
     * Get True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
     */
    public function getIsInverted(): bool
    {
        return $this->isInverted;
    }

    /**
     * Set True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only
     */
    public function setIsInverted(bool $isInverted): self
    {
        $this->isInverted = $isInverted;

        return $this;
    }

    /**
     * Get True, if the background needs to be slightly moved when device is tilted
     */
    public function getIsMoving(): bool
    {
        return $this->isMoving;
    }

    /**
     * Set True, if the background needs to be slightly moved when device is tilted
     */
    public function setIsMoving(bool $isMoving): self
    {
        $this->isMoving = $isMoving;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'backgroundTypePattern',
            'fill' => $this->getFill(),
            'intensity' => $this->getIntensity(),
            'is_inverted' => $this->getIsInverted(),
            'is_moving' => $this->getIsMoving(),
        ];
    }
}
