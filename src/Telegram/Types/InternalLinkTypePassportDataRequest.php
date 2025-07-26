<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link contains a request of Telegram passport data. Call getPassportAuthorizationForm with the given parameters to process the link if the link was received from outside of the application; otherwise, ignore it
 */
class InternalLinkTypePassportDataRequest extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** User identifier of the service's bot; the corresponding user may be unknown yet */
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
        /** An HTTP URL to open once the request is finished, canceled, or failed with the parameters tg_passport=success, tg_passport=cancel, or tg_passport=error&error=... respectively. */
        #[SerializedName('callback_url')]
        private string $callbackUrl,
    ) {
    }

    /**
     * Get User identifier of the service's bot; the corresponding user may be unknown yet
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of the service's bot; the corresponding user may be unknown yet
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

    /**
     * Get An HTTP URL to open once the request is finished, canceled, or failed with the parameters tg_passport=success, tg_passport=cancel, or tg_passport=error&error=... respectively.
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * Set An HTTP URL to open once the request is finished, canceled, or failed with the parameters tg_passport=success, tg_passport=cancel, or tg_passport=error&error=... respectively.
     */
    public function setCallbackUrl(string $callbackUrl): self
    {
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypePassportDataRequest',
            'bot_user_id' => $this->getBotUserId(),
            'scope' => $this->getScope(),
            'public_key' => $this->getPublicKey(),
            'nonce' => $this->getNonce(),
            'callback_url' => $this->getCallbackUrl(),
        ];
    }
}
