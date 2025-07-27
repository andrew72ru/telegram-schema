<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message content has changed @chat_id Chat identifier @message_id Message identifier @new_content New message content.
 */
class UpdateMessageContent extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_id')]
        private int $messageId,
        #[SerializedName('new_content')]
        private MessageContent|null $newContent = null,
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

    public function getNewContent(): MessageContent|null
    {
        return $this->newContent;
    }

    public function setNewContent(MessageContent|null $newContent): self
    {
        $this->newContent = $newContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageContent',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'new_content' => $this->getNewContent(),
        ];
    }
}
