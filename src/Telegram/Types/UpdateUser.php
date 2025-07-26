<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some data of a user has changed. This update is guaranteed to come before the user identifier is returned to the application @user New data about the user
 */
class UpdateUser extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user')]
        private User|null $user = null,
    ) {
    }

    public function getUser(): User|null
    {
        return $this->user;
    }

    public function setUser(User|null $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateUser',
            'user' => $this->getUser(),
        ];
    }
}
