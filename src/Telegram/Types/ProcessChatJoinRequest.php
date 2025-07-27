<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Handles a pending join request in a chat @chat_id Chat identifier @user_id Identifier of the user that sent the request @approve Pass true to approve the request; pass false to decline it.
 */
class ProcessChatJoinRequest extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('approve')]
        private bool $approve,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
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

    public function getApprove(): bool
    {
        return $this->approve;
    }

    public function setApprove(bool $approve): self
    {
        $this->approve = $approve;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'processChatJoinRequest',
            'chat_id' => $this->getChatId(),
            'user_id' => $this->getUserId(),
            'approve' => $this->getApprove(),
        ];
    }
}
