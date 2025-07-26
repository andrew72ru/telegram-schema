<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes users from the contact list @user_ids Identifiers of users to be deleted
 */
class RemoveContacts extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
    ) {
    }

    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeContacts',
            'user_ids' => $this->getUserIds(),
        ];
    }
}
