<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the marked as unread state of a chat @chat_id Chat identifier @is_marked_as_unread New value of is_marked_as_unread.
 */
class ToggleChatIsMarkedAsUnread extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('is_marked_as_unread')]
        private bool $isMarkedAsUnread,
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

    public function getIsMarkedAsUnread(): bool
    {
        return $this->isMarkedAsUnread;
    }

    public function setIsMarkedAsUnread(bool $isMarkedAsUnread): self
    {
        $this->isMarkedAsUnread = $isMarkedAsUnread;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleChatIsMarkedAsUnread',
            'chat_id' => $this->getChatId(),
            'is_marked_as_unread' => $this->getIsMarkedAsUnread(),
        ];
    }
}
