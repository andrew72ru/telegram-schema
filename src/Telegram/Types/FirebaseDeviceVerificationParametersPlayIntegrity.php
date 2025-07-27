<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Device verification must be performed with the classic Play Integrity verification (https://developer.android.com/google/play/integrity/classic).
 */
class FirebaseDeviceVerificationParametersPlayIntegrity extends FirebaseDeviceVerificationParameters implements \JsonSerializable
{
    public function __construct(
        /** Base64url-encoded nonce to pass to the Play Integrity API */
        #[SerializedName('nonce')]
        private string $nonce,
        /** Cloud project number to pass to the Play Integrity API */
        #[SerializedName('cloud_project_number')]
        private int $cloudProjectNumber,
    ) {
    }

    /**
     * Get Base64url-encoded nonce to pass to the Play Integrity API.
     */
    public function getNonce(): string
    {
        return $this->nonce;
    }

    /**
     * Set Base64url-encoded nonce to pass to the Play Integrity API.
     */
    public function setNonce(string $nonce): self
    {
        $this->nonce = $nonce;

        return $this;
    }

    /**
     * Get Cloud project number to pass to the Play Integrity API.
     */
    public function getCloudProjectNumber(): int
    {
        return $this->cloudProjectNumber;
    }

    /**
     * Set Cloud project number to pass to the Play Integrity API.
     */
    public function setCloudProjectNumber(int $cloudProjectNumber): self
    {
        $this->cloudProjectNumber = $cloudProjectNumber;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'firebaseDeviceVerificationParametersPlayIntegrity',
            'nonce' => $this->getNonce(),
            'cloud_project_number' => $this->getCloudProjectNumber(),
        ];
    }
}
