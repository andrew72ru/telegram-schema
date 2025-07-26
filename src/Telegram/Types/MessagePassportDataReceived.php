<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Telegram Passport data has been received; for bots only @elements List of received Telegram Passport elements @credentials Encrypted data credentials
 */
class MessagePassportDataReceived extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('elements')]
        private array|null $elements = null,
        #[SerializedName('credentials')]
        private EncryptedCredentials|null $credentials = null,
    ) {
    }

    public function getElements(): array|null
    {
        return $this->elements;
    }

    public function setElements(array|null $elements): self
    {
        $this->elements = $elements;

        return $this;
    }

    public function getCredentials(): EncryptedCredentials|null
    {
        return $this->credentials;
    }

    public function setCredentials(EncryptedCredentials|null $credentials): self
    {
        $this->credentials = $credentials;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePassportDataReceived',
            'elements' => $this->getElements(),
            'credentials' => $this->getCredentials(),
        ];
    }
}
