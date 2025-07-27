<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the order of pinned forum topics; requires can_manage_topics right in the supergroup @chat_id Chat identifier @message_thread_ids The new list of pinned forum topics.
 */
class SetPinnedForumTopics extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_thread_ids')]
        private array|null $messageThreadIds = null,
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

    public function getMessageThreadIds(): array|null
    {
        return $this->messageThreadIds;
    }

    public function setMessageThreadIds(array|null $messageThreadIds): self
    {
        $this->messageThreadIds = $messageThreadIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPinnedForumTopics',
            'chat_id' => $this->getChatId(),
            'message_thread_ids' => $this->getMessageThreadIds(),
        ];
    }
}
