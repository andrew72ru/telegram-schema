<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Marks all mentions in a forum topic as read @chat_id Chat identifier @message_thread_id Message thread identifier in which mentions are marked as read
 */
class ReadAllMessageThreadMentions extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
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

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function setMessageThreadId(int $messageThreadId): self
    {
        $this->messageThreadId = $messageThreadId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'readAllMessageThreadMentions',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
        ];
    }
}
