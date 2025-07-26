<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new chat member was invited @user_id New member user identifier @status New member status
 */
class ChatEventMemberInvited extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('status')]
        private ChatMemberStatus|null $status = null,
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

    public function getStatus(): ChatMemberStatus|null
    {
        return $this->status;
    }

    public function setStatus(ChatMemberStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMemberInvited',
            'user_id' => $this->getUserId(),
            'status' => $this->getStatus(),
        ];
    }
}
