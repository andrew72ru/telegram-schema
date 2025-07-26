<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat editable username was changed @old_username Previous chat username @new_username New chat username
 */
class ChatEventUsernameChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_username')]
        private string $oldUsername,
        #[SerializedName('new_username')]
        private string $newUsername,
    ) {
    }

    public function getOldUsername(): string
    {
        return $this->oldUsername;
    }

    public function setOldUsername(string $oldUsername): self
    {
        $this->oldUsername = $oldUsername;

        return $this;
    }

    public function getNewUsername(): string
    {
        return $this->newUsername;
    }

    public function setNewUsername(string $newUsername): self
    {
        $this->newUsername = $newUsername;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventUsernameChanged',
            'old_username' => $this->getOldUsername(),
            'new_username' => $this->getNewUsername(),
        ];
    }
}
