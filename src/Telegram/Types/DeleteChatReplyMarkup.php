<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes the default reply markup from a chat. Must be called after a one-time keyboard or a replyMarkupForceReply reply markup has been used. An updateChatReplyMarkup update will be sent if the reply markup is changed
 */
class DeleteChatReplyMarkup extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The message identifier of the used keyboard */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get The message identifier of the used keyboard
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set The message identifier of the used keyboard
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteChatReplyMarkup',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
