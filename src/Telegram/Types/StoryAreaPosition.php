<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes position of a clickable rectangle area on a story media.
 */
class StoryAreaPosition implements \JsonSerializable
{
    public function __construct(
        /** The abscissa of the rectangle's center, as a percentage of the media width */
        #[SerializedName('x_percentage')]
        private float $xPercentage,
        /** The ordinate of the rectangle's center, as a percentage of the media height */
        #[SerializedName('y_percentage')]
        private float $yPercentage,
        /** The width of the rectangle, as a percentage of the media width */
        #[SerializedName('width_percentage')]
        private float $widthPercentage,
        /** The height of the rectangle, as a percentage of the media height */
        #[SerializedName('height_percentage')]
        private float $heightPercentage,
        /** Clockwise rotation angle of the rectangle, in degrees; 0-360 */
        #[SerializedName('rotation_angle')]
        private float $rotationAngle,
        /** The radius of the rectangle corner rounding, as a percentage of the media width */
        #[SerializedName('corner_radius_percentage')]
        private float $cornerRadiusPercentage,
    ) {
    }

    /**
     * Get The abscissa of the rectangle's center, as a percentage of the media width.
     */
    public function getXPercentage(): float
    {
        return $this->xPercentage;
    }

    /**
     * Set The abscissa of the rectangle's center, as a percentage of the media width.
     */
    public function setXPercentage(float $xPercentage): self
    {
        $this->xPercentage = $xPercentage;

        return $this;
    }

    /**
     * Get The ordinate of the rectangle's center, as a percentage of the media height.
     */
    public function getYPercentage(): float
    {
        return $this->yPercentage;
    }

    /**
     * Set The ordinate of the rectangle's center, as a percentage of the media height.
     */
    public function setYPercentage(float $yPercentage): self
    {
        $this->yPercentage = $yPercentage;

        return $this;
    }

    /**
     * Get The width of the rectangle, as a percentage of the media width.
     */
    public function getWidthPercentage(): float
    {
        return $this->widthPercentage;
    }

    /**
     * Set The width of the rectangle, as a percentage of the media width.
     */
    public function setWidthPercentage(float $widthPercentage): self
    {
        $this->widthPercentage = $widthPercentage;

        return $this;
    }

    /**
     * Get The height of the rectangle, as a percentage of the media height.
     */
    public function getHeightPercentage(): float
    {
        return $this->heightPercentage;
    }

    /**
     * Set The height of the rectangle, as a percentage of the media height.
     */
    public function setHeightPercentage(float $heightPercentage): self
    {
        $this->heightPercentage = $heightPercentage;

        return $this;
    }

    /**
     * Get Clockwise rotation angle of the rectangle, in degrees; 0-360.
     */
    public function getRotationAngle(): float
    {
        return $this->rotationAngle;
    }

    /**
     * Set Clockwise rotation angle of the rectangle, in degrees; 0-360.
     */
    public function setRotationAngle(float $rotationAngle): self
    {
        $this->rotationAngle = $rotationAngle;

        return $this;
    }

    /**
     * Get The radius of the rectangle corner rounding, as a percentage of the media width.
     */
    public function getCornerRadiusPercentage(): float
    {
        return $this->cornerRadiusPercentage;
    }

    /**
     * Set The radius of the rectangle corner rounding, as a percentage of the media width.
     */
    public function setCornerRadiusPercentage(float $cornerRadiusPercentage): self
    {
        $this->cornerRadiusPercentage = $cornerRadiusPercentage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyAreaPosition',
            'x_percentage' => $this->getXPercentage(),
            'y_percentage' => $this->getYPercentage(),
            'width_percentage' => $this->getWidthPercentage(),
            'height_percentage' => $this->getHeightPercentage(),
            'rotation_angle' => $this->getRotationAngle(),
            'corner_radius_percentage' => $this->getCornerRadiusPercentage(),
        ];
    }
}
