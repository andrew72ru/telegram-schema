<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a chat administrator @user_id User identifier of the administrator @custom_title Custom title of the administrator @is_owner True, if the user is the owner of the chat.
 */
class ChatAdministrator implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('custom_title')]
        private string $customTitle,
        #[SerializedName('is_owner')]
        private bool $isOwner,
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

    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    public function setCustomTitle(string $customTitle): self
    {
        $this->customTitle = $customTitle;

        return $this;
    }

    public function getIsOwner(): bool
    {
        return $this->isOwner;
    }

    public function setIsOwner(bool $isOwner): self
    {
        $this->isOwner = $isOwner;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatAdministrator',
            'user_id' => $this->getUserId(),
            'custom_title' => $this->getCustomTitle(),
            'is_owner' => $this->getIsOwner(),
        ];
    }
}
