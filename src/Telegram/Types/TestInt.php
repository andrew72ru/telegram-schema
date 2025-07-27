<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A simple object containing a number; for testing only @value Number.
 */
class TestInt implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('value')]
        private int $value,
    ) {
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testInt',
            'value' => $this->getValue(),
        ];
    }
}
