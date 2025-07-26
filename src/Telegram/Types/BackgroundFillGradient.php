<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a gradient fill of a background
 */
class BackgroundFillGradient extends BackgroundFill implements \JsonSerializable
{
    public function __construct(
        /** A top color of the background in the RGB format */
        #[SerializedName('top_color')]
        private int $topColor,
        /** A bottom color of the background in the RGB format */
        #[SerializedName('bottom_color')]
        private int $bottomColor,
        /** Clockwise rotation angle of the gradient, in degrees; 0-359. Must always be divisible by 45 */
        #[SerializedName('rotation_angle')]
        private int $rotationAngle,
    ) {
    }

    /**
     * Get A top color of the background in the RGB format
     */
    public function getTopColor(): int
    {
        return $this->topColor;
    }

    /**
     * Set A top color of the background in the RGB format
     */
    public function setTopColor(int $topColor): self
    {
        $this->topColor = $topColor;

        return $this;
    }

    /**
     * Get A bottom color of the background in the RGB format
     */
    public function getBottomColor(): int
    {
        return $this->bottomColor;
    }

    /**
     * Set A bottom color of the background in the RGB format
     */
    public function setBottomColor(int $bottomColor): self
    {
        $this->bottomColor = $bottomColor;

        return $this;
    }

    /**
     * Get Clockwise rotation angle of the gradient, in degrees; 0-359. Must always be divisible by 45
     */
    public function getRotationAngle(): int
    {
        return $this->rotationAngle;
    }

    /**
     * Set Clockwise rotation angle of the gradient, in degrees; 0-359. Must always be divisible by 45
     */
    public function setRotationAngle(int $rotationAngle): self
    {
        $this->rotationAngle = $rotationAngle;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'backgroundFillGradient',
            'top_color' => $this->getTopColor(),
            'bottom_color' => $this->getBottomColor(),
            'rotation_angle' => $this->getRotationAngle(),
        ];
    }
}
