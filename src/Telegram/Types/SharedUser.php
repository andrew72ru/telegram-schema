<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a user shared with a bot
 */
class SharedUser implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** First name of the user; for bots only */
        #[SerializedName('first_name')]
        private string $firstName,
        /** Last name of the user; for bots only */
        #[SerializedName('last_name')]
        private string $lastName,
        /** Username of the user; for bots only */
        #[SerializedName('username')]
        private string $username,
        /** Profile photo of the user; for bots only; may be null */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
    ) {
    }

    /**
     * Get User identifier
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get First name of the user; for bots only
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set First name of the user; for bots only
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get Last name of the user; for bots only
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set Last name of the user; for bots only
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get Username of the user; for bots only
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set Username of the user; for bots only
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get Profile photo of the user; for bots only; may be null
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Profile photo of the user; for bots only; may be null
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sharedUser',
            'user_id' => $this->getUserId(),
            'first_name' => $this->getFirstName(),
            'last_name' => $this->getLastName(),
            'username' => $this->getUsername(),
            'photo' => $this->getPhoto(),
        ];
    }
}
