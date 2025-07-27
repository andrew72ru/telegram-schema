<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Applies if a user enters new credentials using Google Pay @data JSON-encoded data with the credential identifier.
 */
class InputCredentialsGooglePay extends InputCredentials implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('data')]
        private string $data,
    ) {
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputCredentialsGooglePay',
            'data' => $this->getData(),
        ];
    }
}
