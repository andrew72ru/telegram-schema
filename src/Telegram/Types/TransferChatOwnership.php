<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the owner of a chat; requires owner privileges in the chat. Use the method canTransferOwnership to check whether the ownership can be transferred from the current session. Available only for supergroups and channel chats.
 */
class TransferChatOwnership extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the user to which transfer the ownership. The ownership can't be transferred to a bot or to a deleted user */
        #[SerializedName('user_id')]
        private int $userId,
        /** The 2-step verification password of the current user */
        #[SerializedName('password')]
        private string $password,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the user to which transfer the ownership. The ownership can't be transferred to a bot or to a deleted user.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user to which transfer the ownership. The ownership can't be transferred to a bot or to a deleted user.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The 2-step verification password of the current user.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set The 2-step verification password of the current user.
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'transferChatOwnership',
            'chat_id' => $this->getChatId(),
            'user_id' => $this->getUserId(),
            'password' => $this->getPassword(),
        ];
    }
}
