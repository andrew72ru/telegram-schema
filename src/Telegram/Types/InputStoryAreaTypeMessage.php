<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area pointing to a message
 */
class InputStoryAreaTypeMessage extends InputStoryAreaType implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat with the message. Currently, the chat must be a supergroup or a channel chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message. Use messageProperties.can_be_shared_in_story to check whether the message is suitable */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Identifier of the chat with the message. Currently, the chat must be a supergroup or a channel chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat with the message. Currently, the chat must be a supergroup or a channel chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message. Use messageProperties.can_be_shared_in_story to check whether the message is suitable
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message. Use messageProperties.can_be_shared_in_story to check whether the message is suitable
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryAreaTypeMessage',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
