<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes the account of the current user, deleting all information associated with the user from the server. The phone number of the account can be used to create a new account.
 */
class DeleteAccount extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The reason why the account was deleted; optional */
        #[SerializedName('reason')]
        private string $reason,
        /** The 2-step verification password of the current user. If the current user isn't authorized, then an empty string can be passed and account deletion can be canceled within one week */
        #[SerializedName('password')]
        private string $password,
    ) {
    }

    /**
     * Get The reason why the account was deleted; optional.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Set The reason why the account was deleted; optional.
     */
    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get The 2-step verification password of the current user. If the current user isn't authorized, then an empty string can be passed and account deletion can be canceled within one week.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set The 2-step verification password of the current user. If the current user isn't authorized, then an empty string can be passed and account deletion can be canceled within one week.
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteAccount',
            'reason' => $this->getReason(),
            'password' => $this->getPassword(),
        ];
    }
}
