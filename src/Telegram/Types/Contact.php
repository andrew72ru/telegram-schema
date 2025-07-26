<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a user contact
 */
class Contact implements \JsonSerializable
{
    public function __construct(
        /** Phone number of the user */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
        /** First name of the user; 1-255 characters in length */
        #[SerializedName('first_name')]
        private string $firstName,
        /** Last name of the user */
        #[SerializedName('last_name')]
        private string $lastName,
        /** Additional data about the user in a form of vCard; 0-2048 bytes in length */
        #[SerializedName('vcard')]
        private string $vcard,
        /** Identifier of the user, if known; 0 otherwise */
        #[SerializedName('user_id')]
        private int $userId,
    ) {
    }

    /**
     * Get Phone number of the user
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set Phone number of the user
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get First name of the user; 1-255 characters in length
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set First name of the user; 1-255 characters in length
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get Last name of the user
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set Last name of the user
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get Additional data about the user in a form of vCard; 0-2048 bytes in length
     */
    public function getVcard(): string
    {
        return $this->vcard;
    }

    /**
     * Set Additional data about the user in a form of vCard; 0-2048 bytes in length
     */
    public function setVcard(string $vcard): self
    {
        $this->vcard = $vcard;

        return $this;
    }

    /**
     * Get Identifier of the user, if known; 0 otherwise
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user, if known; 0 otherwise
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'contact',
            'phone_number' => $this->getPhoneNumber(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
            'vcard' => $this->getVcard(),
            'user_id' => $this->getUserId(),
        ];
    }
}
