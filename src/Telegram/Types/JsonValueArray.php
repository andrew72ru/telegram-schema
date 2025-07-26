<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a JSON array @values The list of array elements
 */
class JsonValueArray extends JsonValue implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('values')]
        private array|null $values = null,
    ) {
    }

    public function getValues(): array|null
    {
        return $this->values;
    }

    public function setValues(array|null $values): self
    {
        $this->values = $values;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'jsonValueArray',
            'values' => $this->getValues(),
        ];
    }
}
