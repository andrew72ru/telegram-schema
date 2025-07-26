<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the received string; for testing only. This is an offline method. Can be called before authorization @x String to return
 */
class TestCallString extends TestString implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('x')]
        private string $x,
    ) {
    }

    public function getX(): string
    {
        return $this->x;
    }

    public function setX(string $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testCallString',
            'x' => $this->getX(),
        ];
    }
}
