<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the squared received number; for testing only. This is an offline method. Can be called before authorization @x Number to square.
 */
class TestSquareInt extends TestInt implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('x')]
        private int $x,
    ) {
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testSquareInt',
            'x' => $this->getX(),
        ];
    }
}
