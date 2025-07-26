<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A request can't be completed unless application verification is performed; for official mobile applications only.
 */
class UpdateApplicationVerificationRequired extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier for the verification process */
        #[SerializedName('verification_id')]
        private int $verificationId,
        /** Unique base64url-encoded nonce for the classic Play Integrity verification (https://developer.android.com/google/play/integrity/classic) for Android, */
        #[SerializedName('nonce')]
        private string $nonce,
        /** Cloud project number to pass to the Play Integrity API on Android */
        #[SerializedName('cloud_project_number')]
        private int $cloudProjectNumber,
    ) {
    }

    /**
     * Get Unique identifier for the verification process
     */
    public function getVerificationId(): int
    {
        return $this->verificationId;
    }

    /**
     * Set Unique identifier for the verification process
     */
    public function setVerificationId(int $verificationId): self
    {
        $this->verificationId = $verificationId;

        return $this;
    }

    /**
     * Get Unique base64url-encoded nonce for the classic Play Integrity verification (https://developer.android.com/google/play/integrity/classic) for Android,
     */
    public function getNonce(): string
    {
        return $this->nonce;
    }

    /**
     * Set Unique base64url-encoded nonce for the classic Play Integrity verification (https://developer.android.com/google/play/integrity/classic) for Android,
     */
    public function setNonce(string $nonce): self
    {
        $this->nonce = $nonce;

        return $this;
    }

    /**
     * Get Cloud project number to pass to the Play Integrity API on Android
     */
    public function getCloudProjectNumber(): int
    {
        return $this->cloudProjectNumber;
    }

    /**
     * Set Cloud project number to pass to the Play Integrity API on Android
     */
    public function setCloudProjectNumber(int $cloudProjectNumber): self
    {
        $this->cloudProjectNumber = $cloudProjectNumber;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateApplicationVerificationRequired',
            'verification_id' => $this->getVerificationId(),
            'nonce' => $this->getNonce(),
            'cloud_project_number' => $this->getCloudProjectNumber(),
        ];
    }
}
