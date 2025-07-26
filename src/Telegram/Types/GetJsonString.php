<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Converts a JsonValue object to corresponding JSON-serialized string. Can be called synchronously @json_value The JsonValue object
 */
class GetJsonString extends Text implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('json_value')]
        private JsonValue|null $jsonValue = null,
    ) {
    }

    public function getJsonValue(): JsonValue|null
    {
        return $this->jsonValue;
    }

    public function setJsonValue(JsonValue|null $jsonValue): self
    {
        $this->jsonValue = $jsonValue;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getJsonString',
            'json_value' => $this->getJsonValue(),
        ];
    }
}
