<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a user that had or will have a birthday soon @user_id User identifier @birthdate Birthdate of the user.
 */
class CloseBirthdayUser implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('birthdate')]
        private Birthdate|null $birthdate = null,
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getBirthdate(): Birthdate|null
    {
        return $this->birthdate;
    }

    public function setBirthdate(Birthdate|null $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'closeBirthdayUser',
            'user_id' => $this->getUserId(),
            'birthdate' => $this->getBirthdate(),
        ];
    }
}
