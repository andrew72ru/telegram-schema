<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Application or reCAPTCHA verification has been completed. Can be called before authorization.
 */
class SetApplicationVerificationToken extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier for the verification process as received from updateApplicationVerificationRequired or updateApplicationRecaptchaVerificationRequired */
        #[SerializedName('verification_id')]
        private int $verificationId,
        /** Play Integrity API token for the Android application, or secret from push notification for the iOS application for application verification, or reCAPTCHA token for reCAPTCHA verifications; */
        #[SerializedName('token')]
        private string $token,
    ) {
    }

    /**
     * Get Unique identifier for the verification process as received from updateApplicationVerificationRequired or updateApplicationRecaptchaVerificationRequired.
     */
    public function getVerificationId(): int
    {
        return $this->verificationId;
    }

    /**
     * Set Unique identifier for the verification process as received from updateApplicationVerificationRequired or updateApplicationRecaptchaVerificationRequired.
     */
    public function setVerificationId(int $verificationId): self
    {
        $this->verificationId = $verificationId;

        return $this;
    }

    /**
     * Get Play Integrity API token for the Android application, or secret from push notification for the iOS application for application verification, or reCAPTCHA token for reCAPTCHA verifications;.
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Set Play Integrity API token for the Android application, or secret from push notification for the iOS application for application verification, or reCAPTCHA token for reCAPTCHA verifications;.
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setApplicationVerificationToken',
            'verification_id' => $this->getVerificationId(),
            'token' => $this->getToken(),
        ];
    }
}
