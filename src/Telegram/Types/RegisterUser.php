<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Finishes user registration. Works only when the current authorization state is authorizationStateWaitRegistration.
 */
class RegisterUser extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The first name of the user; 1-64 characters */
        #[SerializedName('first_name')]
        private string $firstName,
        /** The last name of the user; 0-64 characters */
        #[SerializedName('last_name')]
        private string $lastName,
        /** Pass true to disable notification about the current user joining Telegram for other users that added them to contact list */
        #[SerializedName('disable_notification')]
        private bool $disableNotification,
    ) {
    }

    /**
     * Get The first name of the user; 1-64 characters.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set The first name of the user; 1-64 characters.
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get The last name of the user; 0-64 characters.
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set The last name of the user; 0-64 characters.
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get Pass true to disable notification about the current user joining Telegram for other users that added them to contact list.
     */
    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    /**
     * Set Pass true to disable notification about the current user joining Telegram for other users that added them to contact list.
     */
    public function setDisableNotification(bool $disableNotification): self
    {
        $this->disableNotification = $disableNotification;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'registerUser',
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
            'disable_notification' => $this->getDisableNotification(),
        ];
    }
}
