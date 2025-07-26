<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Smart Glocal payment provider @public_token Public payment token @tokenize_url URL for sending card tokenization requests
 */
class PaymentProviderSmartGlocal extends PaymentProvider implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('public_token')]
        private string $publicToken,
        #[SerializedName('tokenize_url')]
        private string $tokenizeUrl,
    ) {
    }

    public function getPublicToken(): string
    {
        return $this->publicToken;
    }

    public function setPublicToken(string $publicToken): self
    {
        $this->publicToken = $publicToken;

        return $this;
    }

    public function getTokenizeUrl(): string
    {
        return $this->tokenizeUrl;
    }

    public function setTokenizeUrl(string $tokenizeUrl): self
    {
        $this->tokenizeUrl = $tokenizeUrl;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentProviderSmartGlocal',
            'public_token' => $this->getPublicToken(),
            'tokenize_url' => $this->getTokenizeUrl(),
        ];
    }
}
