<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Stops a poll.
 */
class StopPoll extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the poll belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message containing the poll. Use messageProperties.can_be_edited to check whether the poll can be stopped */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new message reply markup; pass null if none; for bots only */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
    ) {
    }

    /**
     * Get Identifier of the chat to which the poll belongs.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the poll belongs.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message containing the poll. Use messageProperties.can_be_edited to check whether the poll can be stopped.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message containing the poll. Use messageProperties.can_be_edited to check whether the poll can be stopped.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The new message reply markup; pass null if none; for bots only.
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none; for bots only.
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stopPoll',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
        ];
    }
}
