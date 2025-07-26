<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the first and last name of a business account; for bots only
 */
class SetBusinessAccountName extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The new value of the first name for the business account; 1-64 characters */
        #[SerializedName('first_name')]
        private string $firstName,
        /** The new value of the optional last name for the business account; 0-64 characters */
        #[SerializedName('last_name')]
        private string $lastName,
    ) {
    }

    /**
     * Get Unique identifier of business connection
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get The new value of the first name for the business account; 1-64 characters
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set The new value of the first name for the business account; 1-64 characters
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get The new value of the optional last name for the business account; 0-64 characters
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set The new value of the optional last name for the business account; 0-64 characters
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessAccountName',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
        ];
    }
}
