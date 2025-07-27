<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Applies if a user enters new credentials on a payment provider website @data JSON-encoded data with the credential identifier from the payment provider @allow_save True, if the credential identifier can be saved on the server side.
 */
class InputCredentialsNew extends InputCredentials implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('data')]
        private string $data,
        #[SerializedName('allow_save')]
        private bool $allowSave,
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

    public function getAllowSave(): bool
    {
        return $this->allowSave;
    }

    public function setAllowSave(bool $allowSave): self
    {
        $this->allowSave = $allowSave;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputCredentialsNew',
            'data' => $this->getData(),
            'allow_save' => $this->getAllowSave(),
        ];
    }
}
