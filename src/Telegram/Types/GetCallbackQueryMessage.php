<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a message with the callback button that originated a callback query; for bots only @chat_id Identifier of the chat the message belongs to @message_id Message identifier @callback_query_id Identifier of the callback query
 */
class GetCallbackQueryMessage extends Message implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_id')]
        private int $messageId,
        #[SerializedName('callback_query_id')]
        private int $callbackQueryId,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function getCallbackQueryId(): int
    {
        return $this->callbackQueryId;
    }

    public function setCallbackQueryId(int $callbackQueryId): self
    {
        $this->callbackQueryId = $callbackQueryId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCallbackQueryMessage',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'callback_query_id' => $this->getCallbackQueryId(),
        ];
    }
}
