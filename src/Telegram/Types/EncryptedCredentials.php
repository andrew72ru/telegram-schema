<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains encrypted Telegram Passport data credentials @data The encrypted credentials @hash The decrypted data hash @secret Secret for data decryption, encrypted with the service's public key
 */
class EncryptedCredentials implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('data')]
        private string $data,
        #[SerializedName('hash')]
        private string $hash,
        #[SerializedName('secret')]
        private string $secret,
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

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function setSecret(string $secret): self
    {
        $this->secret = $secret;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'encryptedCredentials',
            'data' => $this->getData(),
            'hash' => $this->getHash(),
            'secret' => $this->getSecret(),
        ];
    }
}
