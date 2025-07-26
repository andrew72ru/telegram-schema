<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the first and last name of the current user @first_name The new value of the first name for the current user; 1-64 characters @last_name The new value of the optional last name for the current user; 0-64 characters
 */
class SetName extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('first_name')]
        private string $firstName,
        #[SerializedName('last_name')]
        private string $lastName,
    ) {
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setName',
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
        ];
    }
}
