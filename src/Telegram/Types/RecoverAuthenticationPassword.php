<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Recovers the 2-step verification password with a password recovery code sent to an email address that was previously set up. Works only when the current authorization state is authorizationStateWaitPassword
 */
class RecoverAuthenticationPassword extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Recovery code to check */
        #[SerializedName('recovery_code')]
        private string $recoveryCode,
        /** New 2-step verification password of the user; may be empty to remove the password */
        #[SerializedName('new_password')]
        private string $newPassword,
        /** New password hint; may be empty */
        #[SerializedName('new_hint')]
        private string $newHint,
    ) {
    }

    /**
     * Get Recovery code to check
     */
    public function getRecoveryCode(): string
    {
        return $this->recoveryCode;
    }

    /**
     * Set Recovery code to check
     */
    public function setRecoveryCode(string $recoveryCode): self
    {
        $this->recoveryCode = $recoveryCode;

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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'recoverAuthenticationPassword',
            'recovery_code' => $this->getRecoveryCode(),
            'new_password' => $this->getNewPassword(),
            'new_hint' => $this->getNewHint(),
        ];
    }
}
