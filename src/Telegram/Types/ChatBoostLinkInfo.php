<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a link to boost a chat.
 */
class ChatBoostLinkInfo implements \JsonSerializable
{
    public function __construct(
        /** True, if the link will work for non-members of the chat */
        #[SerializedName('is_public')]
        private bool $isPublic,
        /** Identifier of the chat to which the link points; 0 if the chat isn't found */
        #[SerializedName('chat_id')]
        private int $chatId,
    ) {
    }

    /**
     * Get True, if the link will work for non-members of the chat.
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * Set True, if the link will work for non-members of the chat.
     */
    public function setIsPublic(bool $isPublic): self
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get Identifier of the chat to which the link points; 0 if the chat isn't found.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the link points; 0 if the chat isn't found.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostLinkInfo',
            'is_public' => $this->getIsPublic(),
            'chat_id' => $this->getChatId(),
        ];
    }
}
