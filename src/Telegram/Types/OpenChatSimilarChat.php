<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that a chat was opened from the list of similar chats. The method is independent of openChat and closeChat methods.
 */
class OpenChatSimilarChat extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the original chat, which similar chats were requested */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the opened chat */
        #[SerializedName('opened_chat_id')]
        private int $openedChatId,
    ) {
    }

    /**
     * Get Identifier of the original chat, which similar chats were requested.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the original chat, which similar chats were requested.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the opened chat.
     */
    public function getOpenedChatId(): int
    {
        return $this->openedChatId;
    }

    /**
     * Set Identifier of the opened chat.
     */
    public function setOpenedChatId(int $openedChatId): self
    {
        $this->openedChatId = $openedChatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'openChatSimilarChat',
            'chat_id' => $this->getChatId(),
            'opened_chat_id' => $this->getOpenedChatId(),
        ];
    }
}
