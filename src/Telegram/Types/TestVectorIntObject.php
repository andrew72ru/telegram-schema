<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A simple object containing a vector of objects that hold a number; for testing only @value Vector of objects.
 */
class TestVectorIntObject implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('value')]
        private array|null $value = null,
    ) {
    }

    public function getValue(): array|null
    {
        return $this->value;
    }

    public function setValue(array|null $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'testVectorIntObject',
            'value' => $this->getValue(),
        ];
    }
}
