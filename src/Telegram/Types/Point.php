<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A point on a Cartesian plane @x The point's first coordinate @y The point's second coordinate
 */
class Point implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('x')]
        private float $x,
        #[SerializedName('y')]
        private float $y,
    ) {
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function setX(float $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setY(float $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'point',
            'x' => $this->getX(),
            'y' => $this->getY(),
        ];
    }
}
