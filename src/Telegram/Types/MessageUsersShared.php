<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The current user shared users, which were requested by the bot @users The shared users @button_id Identifier of the keyboard button with the request
 */
class MessageUsersShared extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('users')]
        private array|null $users = null,
        #[SerializedName('button_id')]
        private int $buttonId,
    ) {
    }

    public function getUsers(): array|null
    {
        return $this->users;
    }

    public function setUsers(array|null $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    public function setButtonId(int $buttonId): self
    {
        $this->buttonId = $buttonId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageUsersShared',
            'users' => $this->getUsers(),
            'button_id' => $this->getButtonId(),
        ];
    }
}
