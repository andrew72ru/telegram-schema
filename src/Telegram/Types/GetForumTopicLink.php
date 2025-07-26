<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTPS link to a topic in a forum chat. This is an offline method @chat_id Identifier of the chat @message_thread_id Message thread identifier of the forum topic
 */
class GetForumTopicLink extends MessageLink implements \JsonSerializable
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
            '@type' => 'getForumTopicLink',
            'chat_id' => $this->getChatId(),
            'message_thread_id' => $this->getMessageThreadId(),
        ];
    }
}
