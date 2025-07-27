<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Device verification must be performed with the SafetyNet Attestation API @nonce Nonce to pass to the SafetyNet Attestation API.
 */
class FirebaseDeviceVerificationParametersSafetyNet extends FirebaseDeviceVerificationParameters implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('nonce')]
        private string $nonce,
    ) {
    }

    public function getNonce(): string
    {
        return $this->nonce;
    }

    public function setNonce(string $nonce): self
    {
        $this->nonce = $nonce;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'firebaseDeviceVerificationParametersSafetyNet',
            'nonce' => $this->getNonce(),
        ];
    }
}
