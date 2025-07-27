<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the received vector of objects containing a string; for testing only. This is an offline method. Can be called before authorization @x Vector of objects to return.
 */
class TestCallVectorStringObject extends TestVectorStringObject implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('x')]
        private array|null $x = null,
    ) {
    }

    public function getX(): array|null
    {
        return $this->x;
    }

    public function setX(array|null $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testCallVectorStringObject',
            'x' => $this->getX(),
        ];
    }
}
