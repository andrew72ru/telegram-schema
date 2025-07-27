<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user has been authorized, but needs to enter a 2-step verification password to start using the application.
 */
class AuthorizationStateWaitPassword extends AuthorizationState implements \JsonSerializable
{
    public function __construct(
        /** Hint for the password; may be empty */
        #[SerializedName('password_hint')]
        private string $passwordHint,
        /** True, if a recovery email address has been set up */
        #[SerializedName('has_recovery_email_address')]
        private bool $hasRecoveryEmailAddress,
        /** True, if some Telegram Passport elements were saved */
        #[SerializedName('has_passport_data')]
        private bool $hasPassportData,
        /** Pattern of the email address to which the recovery email was sent; empty until a recovery email has been sent */
        #[SerializedName('recovery_email_address_pattern')]
        private string $recoveryEmailAddressPattern,
    ) {
    }

    /**
     * Get Hint for the password; may be empty.
     */
    public function getPasswordHint(): string
    {
        return $this->passwordHint;
    }

    /**
     * Set Hint for the password; may be empty.
     */
    public function setPasswordHint(string $passwordHint): self
    {
        $this->passwordHint = $passwordHint;

        return $this;
    }

    /**
     * Get True, if a recovery email address has been set up.
     */
    public function getHasRecoveryEmailAddress(): bool
    {
        return $this->hasRecoveryEmailAddress;
    }

    /**
     * Set True, if a recovery email address has been set up.
     */
    public function setHasRecoveryEmailAddress(bool $hasRecoveryEmailAddress): self
    {
        $this->hasRecoveryEmailAddress = $hasRecoveryEmailAddress;

        return $this;
    }

    /**
     * Get True, if some Telegram Passport elements were saved.
     */
    public function getHasPassportData(): bool
    {
        return $this->hasPassportData;
    }

    /**
     * Set True, if some Telegram Passport elements were saved.
     */
    public function setHasPassportData(bool $hasPassportData): self
    {
        $this->hasPassportData = $hasPassportData;

        return $this;
    }

    /**
     * Get Pattern of the email address to which the recovery email was sent; empty until a recovery email has been sent.
     */
    public function getRecoveryEmailAddressPattern(): string
    {
        return $this->recoveryEmailAddressPattern;
    }

    /**
     * Set Pattern of the email address to which the recovery email was sent; empty until a recovery email has been sent.
     */
    public function setRecoveryEmailAddressPattern(string $recoveryEmailAddressPattern): self
    {
        $this->recoveryEmailAddressPattern = $recoveryEmailAddressPattern;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateWaitPassword',
            'password_hint' => $this->getPasswordHint(),
            'has_recovery_email_address' => $this->getHasRecoveryEmailAddress(),
            'has_passport_data' => $this->getHasPassportData(),
            'recovery_email_address_pattern' => $this->getRecoveryEmailAddressPattern(),
        ];
    }
}
