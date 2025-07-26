<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Stops a poll sent on behalf of a business account; for bots only
 */
class StopBusinessPoll extends BusinessMessage implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection on behalf of which the message with the poll was sent */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** The chat the message belongs to */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message containing the poll */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new message reply markup; pass null if none */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
    ) {
    }

    /**
     * Get Unique identifier of business connection on behalf of which the message with the poll was sent
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection on behalf of which the message with the poll was sent
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get The chat the message belongs to
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat the message belongs to
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message containing the poll
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message containing the poll
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The new message reply markup; pass null if none
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The new message reply markup; pass null if none
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stopBusinessPoll',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'reply_markup' => $this->getReplyMarkup(),
        ];
    }
}
