<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a new member to a chat; requires can_invite_users member right. Members can't be added to private or secret chats. Returns information about members that weren't added.
 */
class AddChatMember extends FailedToAddMembers implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the user */
        #[SerializedName('user_id')]
        private int $userId,
        /** The number of earlier messages from the chat to be forwarded to the new member; up to 100. Ignored for supergroups and channels, or if the added user is a bot */
        #[SerializedName('forward_limit')]
        private int $forwardLimit,
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
     * Get Identifier of the user.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The number of earlier messages from the chat to be forwarded to the new member; up to 100. Ignored for supergroups and channels, or if the added user is a bot.
     */
    public function getForwardLimit(): int
    {
        return $this->forwardLimit;
    }

    /**
     * Set The number of earlier messages from the chat to be forwarded to the new member; up to 100. Ignored for supergroups and channels, or if the added user is a bot.
     */
    public function setForwardLimit(int $forwardLimit): self
    {
        $this->forwardLimit = $forwardLimit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addChatMember',
            'chat_id' => $this->getChatId(),
            'user_id' => $this->getUserId(),
            'forward_limit' => $this->getForwardLimit(),
        ];
    }
}
