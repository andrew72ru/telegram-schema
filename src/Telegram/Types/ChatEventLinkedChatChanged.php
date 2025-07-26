<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The linked chat of a supergroup was changed @old_linked_chat_id Previous supergroup linked chat identifier @new_linked_chat_id New supergroup linked chat identifier
 */
class ChatEventLinkedChatChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_linked_chat_id')]
        private int $oldLinkedChatId,
        #[SerializedName('new_linked_chat_id')]
        private int $newLinkedChatId,
    ) {
    }

    public function getOldLinkedChatId(): int
    {
        return $this->oldLinkedChatId;
    }

    public function setOldLinkedChatId(int $oldLinkedChatId): self
    {
        $this->oldLinkedChatId = $oldLinkedChatId;

        return $this;
    }

    public function getNewLinkedChatId(): int
    {
        return $this->newLinkedChatId;
    }

    public function setNewLinkedChatId(int $newLinkedChatId): self
    {
        $this->newLinkedChatId = $newLinkedChatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventLinkedChatChanged',
            'old_linked_chat_id' => $this->getOldLinkedChatId(),
            'new_linked_chat_id' => $this->getNewLinkedChatId(),
        ];
    }
}
