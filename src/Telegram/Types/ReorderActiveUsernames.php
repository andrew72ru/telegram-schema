<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes order of active usernames of the current user @usernames The new order of active usernames. All currently active usernames must be specified.
 */
class ReorderActiveUsernames extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('usernames')]
        private array|null $usernames = null,
    ) {
    }

    public function getUsernames(): array|null
    {
        return $this->usernames;
    }

    public function setUsernames(array|null $usernames): self
    {
        $this->usernames = $usernames;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reorderActiveUsernames',
            'usernames' => $this->getUsernames(),
        ];
    }
}
