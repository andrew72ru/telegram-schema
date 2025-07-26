<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a Telegram Passport authorization form for sharing data with a service
 */
class GetPassportAuthorizationForm extends PassportAuthorizationForm implements \JsonSerializable
{
    public function __construct(
        /** User identifier of the service's bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Telegram Passport element types requested by the service */
        #[SerializedName('scope')]
        private string $scope,
        /** Service's public key */
        #[SerializedName('public_key')]
        private string $publicKey,
        /** Unique request identifier provided by the service */
        #[SerializedName('nonce')]
        private string $nonce,
    ) {
    }

    /**
     * Get User identifier of the service's bot
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of the service's bot
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Telegram Passport element types requested by the service
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * Set Telegram Passport element types requested by the service
     */
    public function setScope(string $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get Service's public key
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    /**
     * Set Service's public key
     */
    public function setPublicKey(string $publicKey): self
    {
        $this->publicKey = $publicKey;

        return $this;
    }

    /**
     * Get Unique request identifier provided by the service
     */
    public function getNonce(): string
    {
        return $this->nonce;
    }

    /**
     * Set Unique request identifier provided by the service
     */
    public function setNonce(string $nonce): self
    {
        $this->nonce = $nonce;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPassportAuthorizationForm',
            'bot_user_id' => $this->getBotUserId(),
            'scope' => $this->getScope(),
            'public_key' => $this->getPublicKey(),
            'nonce' => $this->getNonce(),
        ];
    }
}
