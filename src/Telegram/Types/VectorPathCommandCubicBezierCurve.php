<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A cubic Bézier curve to a given point @start_control_point The start control point of the curve @end_control_point The end control point of the curve @end_point The end point of the curve.
 */
class VectorPathCommandCubicBezierCurve extends VectorPathCommand implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('start_control_point')]
        private Point|null $startControlPoint = null,
        #[SerializedName('end_control_point')]
        private Point|null $endControlPoint = null,
        #[SerializedName('end_point')]
        private Point|null $endPoint = null,
    ) {
    }

    public function getStartControlPoint(): Point|null
    {
        return $this->startControlPoint;
    }

    public function setStartControlPoint(Point|null $startControlPoint): self
    {
        $this->startControlPoint = $startControlPoint;

        return $this;
    }

    public function getEndControlPoint(): Point|null
    {
        return $this->endControlPoint;
    }

    public function setEndControlPoint(Point|null $endControlPoint): self
    {
        $this->endControlPoint = $endControlPoint;

        return $this;
    }

    public function getEndPoint(): Point|null
    {
        return $this->endPoint;
    }

    public function setEndPoint(Point|null $endPoint): self
    {
        $this->endPoint = $endPoint;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'vectorPathCommandCubicBezierCurve',
            'start_control_point' => $this->getStartControlPoint(),
            'end_control_point' => $this->getEndControlPoint(),
            'end_point' => $this->getEndPoint(),
        ];
    }
}
