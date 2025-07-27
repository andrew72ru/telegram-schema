<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a callback query to a bot and returns an answer. Returns an error with code 502 if the bot fails to answer the query before the query timeout expires.
 */
class GetCallbackQueryAnswer extends CallbackQueryAnswer implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat with the message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message from which the query originated. The message must not be scheduled */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Query payload */
        #[SerializedName('payload')]
        private CallbackQueryPayload|null $payload = null,
    ) {
    }

    /**
     * Get Identifier of the chat with the message.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat with the message.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message from which the query originated. The message must not be scheduled.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message from which the query originated. The message must not be scheduled.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Query payload.
     */
    public function getPayload(): CallbackQueryPayload|null
    {
        return $this->payload;
    }

    /**
     * Set Query payload.
     */
    public function setPayload(CallbackQueryPayload|null $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCallbackQueryAnswer',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'payload' => $this->getPayload(),
        ];
    }
}
