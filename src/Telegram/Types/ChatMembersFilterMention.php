<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns users which can be mentioned in the chat @message_thread_id If non-zero, the identifier of the current message thread.
 */
class ChatMembersFilterMention extends ChatMembersFilter implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message_thread_id')]
        private int $messageThreadId,
    ) {
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
            '@type' => 'chatMembersFilterMention',
            'message_thread_id' => $this->getMessageThreadId(),
        ];
    }
}
