<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains the result of a payment request @success True, if the payment request was successful; otherwise, the verification_url will be non-empty @verification_url URL for additional payment credentials verification
 */
class PaymentResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('success')]
        private bool $success,
        #[SerializedName('verification_url')]
        private string $verificationUrl,
    ) {
    }

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): self
    {
        $this->success = $success;

        return $this;
    }

    public function getVerificationUrl(): string
    {
        return $this->verificationUrl;
    }

    public function setVerificationUrl(string $verificationUrl): self
    {
        $this->verificationUrl = $verificationUrl;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'paymentResult',
            'success' => $this->getSuccess(),
            'verification_url' => $this->getVerificationUrl(),
        ];
    }
}
