<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The number of online group members has changed. This update with non-zero number of online group members is sent only for currently opened chats.
 */
class UpdateChatOnlineMemberCount extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New number of online members in the chat, or 0 if unknown */
        #[SerializedName('online_member_count')]
        private int $onlineMemberCount,
    ) {
    }

    /**
     * Get Identifier of the chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get New number of online members in the chat, or 0 if unknown
     */
    public function getOnlineMemberCount(): int
    {
        return $this->onlineMemberCount;
    }

    /**
     * Set New number of online members in the chat, or 0 if unknown
     */
    public function setOnlineMemberCount(int $onlineMemberCount): self
    {
        $this->onlineMemberCount = $onlineMemberCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatOnlineMemberCount',
            'chat_id' => $this->getChatId(),
            'online_member_count' => $this->getOnlineMemberCount(),
        ];
    }
}
