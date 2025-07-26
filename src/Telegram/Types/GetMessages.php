<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about messages. If a message is not found, returns null on the corresponding position of the result @chat_id Identifier of the chat the messages belong to @message_ids Identifiers of the messages to get
 */
class GetMessages extends Messages implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
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

    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessages',
            'chat_id' => $this->getChatId(),
            'message_ids' => $this->getMessageIds(),
        ];
    }
}
