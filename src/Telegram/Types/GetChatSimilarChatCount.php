<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns approximate number of chats similar to the given chat
 */
class GetChatSimilarChatCount extends Count implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target chat; must be an identifier of a channel chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true to get the number of chats without sending network requests, or -1 if the number of chats is unknown locally */
        #[SerializedName('return_local')]
        private bool $returnLocal,
    ) {
    }

    /**
     * Get Identifier of the target chat; must be an identifier of a channel chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the target chat; must be an identifier of a channel chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass true to get the number of chats without sending network requests, or -1 if the number of chats is unknown locally
     */
    public function getReturnLocal(): bool
    {
        return $this->returnLocal;
    }

    /**
     * Set Pass true to get the number of chats without sending network requests, or -1 if the number of chats is unknown locally
     */
    public function setReturnLocal(bool $returnLocal): self
    {
        $this->returnLocal = $returnLocal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatSimilarChatCount',
            'chat_id' => $this->getChatId(),
            'return_local' => $this->getReturnLocal(),
        ];
    }
}
