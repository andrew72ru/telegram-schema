<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns messages in a message thread of a message. Can be used only if messageProperties.can_get_message_thread == true. Message thread of a channel message is in the channel's linked supergroup.
 */
class GetMessageThreadHistory extends Messages implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier, which thread history needs to be returned */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Identifier of the message starting from which history must be fetched; use 0 to get results from the last message */
        #[SerializedName('from_message_id')]
        private int $fromMessageId,
        /** Specify 0 to get results from exactly the message from_message_id or a negative offset up to 99 to get additionally some newer messages */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset. */
        #[SerializedName('limit')]
        private int $limit,
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
     * Get Message identifier, which thread history needs to be returned.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier, which thread history needs to be returned.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Identifier of the message starting from which history must be fetched; use 0 to get results from the last message.
     */
    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    /**
     * Set Identifier of the message starting from which history must be fetched; use 0 to get results from the last message.
     */
    public function setFromMessageId(int $fromMessageId): self
    {
        $this->fromMessageId = $fromMessageId;

        return $this;
    }

    /**
     * Get Specify 0 to get results from exactly the message from_message_id or a negative offset up to 99 to get additionally some newer messages.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set Specify 0 to get results from exactly the message from_message_id or a negative offset up to 99 to get additionally some newer messages.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset..
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, the limit must be greater than or equal to -offset..
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageThreadHistory',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'from_message_id' => $this->getFromMessageId(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
