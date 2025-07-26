<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Converts a JSON-serialized string to corresponding JsonValue object. Can be called synchronously @json The JSON-serialized string
 */
class GetJsonValue extends JsonValue implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('json')]
        private string $json,
    ) {
    }

    public function getJson(): string
    {
        return $this->json;
    }

    public function setJson(string $json): self
    {
        $this->json = $json;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getJsonValue',
            'json' => $this->getJson(),
        ];
    }
}
