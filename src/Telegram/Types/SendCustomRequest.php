<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a custom request; for bots only @method The method name @parameters JSON-serialized method parameters.
 */
class SendCustomRequest extends CustomRequestResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('method')]
        private string $method,
        #[SerializedName('parameters')]
        private string $parameters,
    ) {
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getParameters(): string
    {
        return $this->parameters;
    }

    public function setParameters(string $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendCustomRequest',
            'method' => $this->getMethod(),
            'parameters' => $this->getParameters(),
        ];
    }
}
