<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the 2-step verification recovery email address of the user. If a new recovery email address is specified, then the change will not be applied until the new recovery email address is confirmed.
 */
class SetRecoveryEmailAddress extends PasswordState implements \JsonSerializable
{
    public function __construct(
        /** The 2-step verification password of the current user */
        #[SerializedName('password')]
        private string $password,
        /** New recovery email address */
        #[SerializedName('new_recovery_email_address')]
        private string $newRecoveryEmailAddress,
    ) {
    }

    /**
     * Get The 2-step verification password of the current user.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set The 2-step verification password of the current user.
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get New recovery email address.
     */
    public function getNewRecoveryEmailAddress(): string
    {
        return $this->newRecoveryEmailAddress;
    }

    /**
     * Set New recovery email address.
     */
    public function setNewRecoveryEmailAddress(string $newRecoveryEmailAddress): self
    {
        $this->newRecoveryEmailAddress = $newRecoveryEmailAddress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setRecoveryEmailAddress',
            'password' => $this->getPassword(),
            'new_recovery_email_address' => $this->getNewRecoveryEmailAddress(),
        ];
    }
}
