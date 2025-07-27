<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A straight line to a given point @end_point The end point of the straight line.
 */
class VectorPathCommandLine extends VectorPathCommand implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('end_point')]
        private Point|null $endPoint = null,
    ) {
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
            '@type' => 'vectorPathCommandLine',
            'end_point' => $this->getEndPoint(),
        ];
    }
}
