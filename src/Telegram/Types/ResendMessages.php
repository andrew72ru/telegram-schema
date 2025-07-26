<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Resends messages which failed to send. Can be called only for messages for which messageSendingStateFailed.can_retry is true and after specified in messageSendingStateFailed.retry_after time passed.
 */
class ResendMessages extends Messages implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to send messages */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifiers of the messages to resend. Message identifiers must be in a strictly increasing order */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
        /** New manually chosen quote from the message to be replied; pass null if none. Ignored if more than one message is re-sent, or if messageSendingStateFailed.need_another_reply_quote == false */
        #[SerializedName('quote')]
        private InputTextQuote|null $quote = null,
        /** The number of Telegram Stars the user agreed to pay to send the messages. Ignored if messageSendingStateFailed.required_paid_message_star_count == 0 */
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
    ) {
    }

    /**
     * Get Identifier of the chat to send messages
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to send messages
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifiers of the messages to resend. Message identifiers must be in a strictly increasing order
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Identifiers of the messages to resend. Message identifiers must be in a strictly increasing order
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    /**
     * Get New manually chosen quote from the message to be replied; pass null if none. Ignored if more than one message is re-sent, or if messageSendingStateFailed.need_another_reply_quote == false
     */
    public function getQuote(): InputTextQuote|null
    {
        return $this->quote;
    }

    /**
     * Set New manually chosen quote from the message to be replied; pass null if none. Ignored if more than one message is re-sent, or if messageSendingStateFailed.need_another_reply_quote == false
     */
    public function setQuote(InputTextQuote|null $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get The number of Telegram Stars the user agreed to pay to send the messages. Ignored if messageSendingStateFailed.required_paid_message_star_count == 0
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * Set The number of Telegram Stars the user agreed to pay to send the messages. Ignored if messageSendingStateFailed.required_paid_message_star_count == 0
     */
    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resendMessages',
            'chat_id' => $this->getChatId(),
            'message_ids' => $this->getMessageIds(),
            'quote' => $this->getQuote(),
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
        ];
    }
}
