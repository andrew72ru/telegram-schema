<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the 2-step verification password for the current user. If a new recovery email address is specified, then the change will not be applied until the new recovery email address is confirmed
 */
class SetPassword extends PasswordState implements \JsonSerializable
{
    public function __construct(
        /** Previous 2-step verification password of the user */
        #[SerializedName('old_password')]
        private string $oldPassword,
        /** New 2-step verification password of the user; may be empty to remove the password */
        #[SerializedName('new_password')]
        private string $newPassword,
        /** New password hint; may be empty */
        #[SerializedName('new_hint')]
        private string $newHint,
        /** Pass true to change also the recovery email address */
        #[SerializedName('set_recovery_email_address')]
        private bool $setRecoveryEmailAddress,
        /** New recovery email address; may be empty */
        #[SerializedName('new_recovery_email_address')]
        private string $newRecoveryEmailAddress,
    ) {
    }

    /**
     * Get Previous 2-step verification password of the user
     */
    public function getOldPassword(): string
    {
        return $this->oldPassword;
    }

    /**
     * Set Previous 2-step verification password of the user
     */
    public function setOldPassword(string $oldPassword): self
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }

    /**
     * Get New 2-step verification password of the user; may be empty to remove the password
     */
    public function getNewPassword(): string
    {
        return $this->newPassword;
    }

    /**
     * Set New 2-step verification password of the user; may be empty to remove the password
     */
    public function setNewPassword(string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }

    /**
     * Get New password hint; may be empty
     */
    public function getNewHint(): string
    {
        return $this->newHint;
    }

    /**
     * Set New password hint; may be empty
     */
    public function setNewHint(string $newHint): self
    {
        $this->newHint = $newHint;

        return $this;
    }

    /**
     * Get Pass true to change also the recovery email address
     */
    public function getSetRecoveryEmailAddress(): bool
    {
        return $this->setRecoveryEmailAddress;
    }

    /**
     * Set Pass true to change also the recovery email address
     */
    public function setSetRecoveryEmailAddress(bool $setRecoveryEmailAddress): self
    {
        $this->setRecoveryEmailAddress = $setRecoveryEmailAddress;

        return $this;
    }

    /**
     * Get New recovery email address; may be empty
     */
    public function getNewRecoveryEmailAddress(): string
    {
        return $this->newRecoveryEmailAddress;
    }

    /**
     * Set New recovery email address; may be empty
     */
    public function setNewRecoveryEmailAddress(string $newRecoveryEmailAddress): self
    {
        $this->newRecoveryEmailAddress = $newRecoveryEmailAddress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPassword',
            'old_password' => $this->getOldPassword(),
            'new_password' => $this->getNewPassword(),
            'new_hint' => $this->getNewHint(),
            'set_recovery_email_address' => $this->getSetRecoveryEmailAddress(),
            'new_recovery_email_address' => $this->getNewRecoveryEmailAddress(),
        ];
    }
}
