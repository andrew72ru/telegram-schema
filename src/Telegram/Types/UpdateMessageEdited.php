<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message was edited. Changes in the message content will come in a separate updateMessageContent
 */
class UpdateMessageEdited extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Point in time (Unix timestamp) when the message was edited */
        #[SerializedName('edit_date')]
        private int $editDate,
        /** New message reply markup; may be null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
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
     * Get Message identifier
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the message was edited
     */
    public function getEditDate(): int
    {
        return $this->editDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the message was edited
     */
    public function setEditDate(int $editDate): self
    {
        $this->editDate = $editDate;

        return $this;
    }

    /**
     * Get New message reply markup; may be null
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set New message reply markup; may be null
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageEdited',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'edit_date' => $this->getEditDate(),
            'reply_markup' => $this->getReplyMarkup(),
        ];
    }
}
