<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A request can't be completed unless reCAPTCHA verification is performed; for official mobile applications only.
 */
class UpdateApplicationRecaptchaVerificationRequired extends Update implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier for the verification process */
        #[SerializedName('verification_id')]
        private int $verificationId,
        /** The action for the check */
        #[SerializedName('action')]
        private string $action,
        /** Identifier of the reCAPTCHA key */
        #[SerializedName('recaptcha_key_id')]
        private string $recaptchaKeyId,
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
     * Get The action for the check
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Set The action for the check
     */
    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get Identifier of the reCAPTCHA key
     */
    public function getRecaptchaKeyId(): string
    {
        return $this->recaptchaKeyId;
    }

    /**
     * Set Identifier of the reCAPTCHA key
     */
    public function setRecaptchaKeyId(string $recaptchaKeyId): self
    {
        $this->recaptchaKeyId = $recaptchaKeyId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateApplicationRecaptchaVerificationRequired',
            'verification_id' => $this->getVerificationId(),
            'action' => $this->getAction(),
            'recaptcha_key_id' => $this->getRecaptchaKeyId(),
        ];
    }
}
