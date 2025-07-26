<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat unread_mention_count has changed @chat_id Chat identifier @unread_mention_count The number of unread mention messages left in the chat
 */
class UpdateChatUnreadMentionCount extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('unread_mention_count')]
        private int $unreadMentionCount,
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

    public function getUnreadMentionCount(): int
    {
        return $this->unreadMentionCount;
    }

    public function setUnreadMentionCount(int $unreadMentionCount): self
    {
        $this->unreadMentionCount = $unreadMentionCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatUnreadMentionCount',
            'chat_id' => $this->getChatId(),
            'unread_mention_count' => $this->getUnreadMentionCount(),
        ];
    }
}
