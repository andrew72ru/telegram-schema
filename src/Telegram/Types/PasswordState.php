<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents the current state of 2-step verification
 */
class PasswordState implements \JsonSerializable
{
    public function __construct(
        /** True, if a 2-step verification password is set */
        #[SerializedName('has_password')]
        private bool $hasPassword,
        /** Hint for the password; may be empty */
        #[SerializedName('password_hint')]
        private string $passwordHint,
        /** True, if a recovery email is set */
        #[SerializedName('has_recovery_email_address')]
        private bool $hasRecoveryEmailAddress,
        /** True, if some Telegram Passport elements were saved */
        #[SerializedName('has_passport_data')]
        private bool $hasPassportData,
        /** Information about the recovery email address to which the confirmation email was sent; may be null */
        #[SerializedName('recovery_email_address_code_info')]
        private EmailAddressAuthenticationCodeInfo|null $recoveryEmailAddressCodeInfo = null,
        /** Pattern of the email address set up for logging in */
        #[SerializedName('login_email_address_pattern')]
        private string $loginEmailAddressPattern,
        /** If not 0, point in time (Unix timestamp) after which the 2-step verification password can be reset immediately using resetPassword */
        #[SerializedName('pending_reset_date')]
        private int $pendingResetDate,
    ) {
    }

    /**
     * Get True, if a 2-step verification password is set
     */
    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    /**
     * Set True, if a 2-step verification password is set
     */
    public function setHasPassword(bool $hasPassword): self
    {
        $this->hasPassword = $hasPassword;

        return $this;
    }

    /**
     * Get Hint for the password; may be empty
     */
    public function getPasswordHint(): string
    {
        return $this->passwordHint;
    }

    /**
     * Set Hint for the password; may be empty
     */
    public function setPasswordHint(string $passwordHint): self
    {
        $this->passwordHint = $passwordHint;

        return $this;
    }

    /**
     * Get True, if a recovery email is set
     */
    public function getHasRecoveryEmailAddress(): bool
    {
        return $this->hasRecoveryEmailAddress;
    }

    /**
     * Set True, if a recovery email is set
     */
    public function setHasRecoveryEmailAddress(bool $hasRecoveryEmailAddress): self
    {
        $this->hasRecoveryEmailAddress = $hasRecoveryEmailAddress;

        return $this;
    }

    /**
     * Get True, if some Telegram Passport elements were saved
     */
    public function getHasPassportData(): bool
    {
        return $this->hasPassportData;
    }

    /**
     * Set True, if some Telegram Passport elements were saved
     */
    public function setHasPassportData(bool $hasPassportData): self
    {
        $this->hasPassportData = $hasPassportData;

        return $this;
    }

    /**
     * Get Information about the recovery email address to which the confirmation email was sent; may be null
     */
    public function getRecoveryEmailAddressCodeInfo(): EmailAddressAuthenticationCodeInfo|null
    {
        return $this->recoveryEmailAddressCodeInfo;
    }

    /**
     * Set Information about the recovery email address to which the confirmation email was sent; may be null
     */
    public function setRecoveryEmailAddressCodeInfo(
        EmailAddressAuthenticationCodeInfo|null $recoveryEmailAddressCodeInfo,
    ): self {
        $this->recoveryEmailAddressCodeInfo = $recoveryEmailAddressCodeInfo;

        return $this;
    }

    /**
     * Get Pattern of the email address set up for logging in
     */
    public function getLoginEmailAddressPattern(): string
    {
        return $this->loginEmailAddressPattern;
    }

    /**
     * Set Pattern of the email address set up for logging in
     */
    public function setLoginEmailAddressPattern(string $loginEmailAddressPattern): self
    {
        $this->loginEmailAddressPattern = $loginEmailAddressPattern;

        return $this;
    }

    /**
     * Get If not 0, point in time (Unix timestamp) after which the 2-step verification password can be reset immediately using resetPassword
     */
    public function getPendingResetDate(): int
    {
        return $this->pendingResetDate;
    }

    /**
     * Set If not 0, point in time (Unix timestamp) after which the 2-step verification password can be reset immediately using resetPassword
     */
    public function setPendingResetDate(int $pendingResetDate): self
    {
        $this->pendingResetDate = $pendingResetDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passwordState',
            'has_password' => $this->getHasPassword(),
            'password_hint' => $this->getPasswordHint(),
            'has_recovery_email_address' => $this->getHasRecoveryEmailAddress(),
            'has_passport_data' => $this->getHasPassportData(),
            'recovery_email_address_code_info' => $this->getRecoveryEmailAddressCodeInfo(),
            'login_email_address_pattern' => $this->getLoginEmailAddressPattern(),
            'pending_reset_date' => $this->getPendingResetDate(),
        ];
    }
}
