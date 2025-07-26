<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat member extended their subscription to the chat @user_id Affected chat member user identifier @old_status Previous status of the chat member @new_status New status of the chat member
 */
class ChatEventMemberSubscriptionExtended extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('old_status')]
        private ChatMemberStatus|null $oldStatus = null,
        #[SerializedName('new_status')]
        private ChatMemberStatus|null $newStatus = null,
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

    public function getOldStatus(): ChatMemberStatus|null
    {
        return $this->oldStatus;
    }

    public function setOldStatus(ChatMemberStatus|null $oldStatus): self
    {
        $this->oldStatus = $oldStatus;

        return $this;
    }

    public function getNewStatus(): ChatMemberStatus|null
    {
        return $this->newStatus;
    }

    public function setNewStatus(ChatMemberStatus|null $newStatus): self
    {
        $this->newStatus = $newStatus;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMemberSubscriptionExtended',
            'user_id' => $this->getUserId(),
            'old_status' => $this->getOldStatus(),
            'new_status' => $this->getNewStatus(),
        ];
    }
}
