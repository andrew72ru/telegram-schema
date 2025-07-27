<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains the result of a custom request @result A JSON-serialized result.
 */
class CustomRequestResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('result')]
        private string $result,
    ) {
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function setResult(string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'customRequestResult',
            'result' => $this->getResult(),
        ];
    }
}
