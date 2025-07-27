<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Position on a photo where a mask is placed.
 */
class MaskPosition implements \JsonSerializable
{
    public function __construct(
        /** Part of the face, relative to which the mask is placed */
        #[SerializedName('point')]
        private MaskPoint|null $point = null,
        /** Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. (For example, -1.0 will place the mask just to the left of the default mask position) */
        #[SerializedName('x_shift')]
        private float $xShift,
        /** Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. (For example, 1.0 will place the mask just below the default mask position) */
        #[SerializedName('y_shift')]
        private float $yShift,
        /** Mask scaling coefficient. (For example, 2.0 means a doubled size) */
        #[SerializedName('scale')]
        private float $scale,
    ) {
    }

    /**
     * Get Part of the face, relative to which the mask is placed.
     */
    public function getPoint(): MaskPoint|null
    {
        return $this->point;
    }

    /**
     * Set Part of the face, relative to which the mask is placed.
     */
    public function setPoint(MaskPoint|null $point): self
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. (For example, -1.0 will place the mask just to the left of the default mask position).
     */
    public function getXShift(): float
    {
        return $this->xShift;
    }

    /**
     * Set Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. (For example, -1.0 will place the mask just to the left of the default mask position).
     */
    public function setXShift(float $xShift): self
    {
        $this->xShift = $xShift;

        return $this;
    }

    /**
     * Get Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. (For example, 1.0 will place the mask just below the default mask position).
     */
    public function getYShift(): float
    {
        return $this->yShift;
    }

    /**
     * Set Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. (For example, 1.0 will place the mask just below the default mask position).
     */
    public function setYShift(float $yShift): self
    {
        $this->yShift = $yShift;

        return $this;
    }

    /**
     * Get Mask scaling coefficient. (For example, 2.0 means a doubled size).
     */
    public function getScale(): float
    {
        return $this->scale;
    }

    /**
     * Set Mask scaling coefficient. (For example, 2.0 means a doubled size).
     */
    public function setScale(float $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'maskPosition',
            'point' => $this->getPoint(),
            'x_shift' => $this->getXShift(),
            'y_shift' => $this->getYShift(),
            'scale' => $this->getScale(),
        ];
    }
}
