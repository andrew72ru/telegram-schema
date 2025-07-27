<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The default chat reply markup was changed. Can occur because new messages with reply markup were received or because an old reply markup was hidden by the user.
 */
class UpdateChatReplyMarkup extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat */
        #[SerializedName('reply_markup_message_id')]
        private int $replyMarkupMessageId,
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
     * Get Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat.
     */
    public function getReplyMarkupMessageId(): int
    {
        return $this->replyMarkupMessageId;
    }

    /**
     * Set Identifier of the message from which reply markup needs to be used; 0 if there is no default custom reply markup in the chat.
     */
    public function setReplyMarkupMessageId(int $replyMarkupMessageId): self
    {
        $this->replyMarkupMessageId = $replyMarkupMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatReplyMarkup',
            'chat_id' => $this->getChatId(),
            'reply_markup_message_id' => $this->getReplyMarkupMessageId(),
        ];
    }
}
