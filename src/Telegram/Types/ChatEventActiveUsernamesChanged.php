<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat active usernames were changed @old_usernames Previous list of active usernames @new_usernames New list of active usernames.
 */
class ChatEventActiveUsernamesChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_usernames')]
        private array|null $oldUsernames = null,
        #[SerializedName('new_usernames')]
        private array|null $newUsernames = null,
    ) {
    }

    public function getOldUsernames(): array|null
    {
        return $this->oldUsernames;
    }

    public function setOldUsernames(array|null $oldUsernames): self
    {
        $this->oldUsernames = $oldUsernames;

        return $this;
    }

    public function getNewUsernames(): array|null
    {
        return $this->newUsernames;
    }

    public function setNewUsernames(array|null $newUsernames): self
    {
        $this->newUsernames = $newUsernames;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventActiveUsernamesChanged',
            'old_usernames' => $this->getOldUsernames(),
            'new_usernames' => $this->getNewUsernames(),
        ];
    }
}
