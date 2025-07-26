<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes type of paid message reaction of the current user on a message. The message must have paid reaction added by the current user
 */
class SetPaidMessageReactionType extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which the message belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
        /** New type of the paid reaction */
        #[SerializedName('type')]
        private PaidReactionType|null $type = null,
    ) {
    }

    /**
     * Get Identifier of the chat to which the message belongs
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which the message belongs
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get New type of the paid reaction
     */
    public function getType(): PaidReactionType|null
    {
        return $this->type;
    }

    /**
     * Set New type of the paid reaction
     */
    public function setType(PaidReactionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPaidMessageReactionType',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'type' => $this->getType(),
        ];
    }
}
