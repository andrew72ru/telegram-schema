<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An invoice from a message of the type messageInvoice or paid media purchase from messagePaidMedia
 */
class InputInvoiceMessage extends InputInvoice implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier of the message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier. Use messageProperties.can_be_paid to check whether the message can be used in the method */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Chat identifier of the message
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier of the message
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message identifier. Use messageProperties.can_be_paid to check whether the message can be used in the method
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier. Use messageProperties.can_be_paid to check whether the message can be used in the method
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInvoiceMessage',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
