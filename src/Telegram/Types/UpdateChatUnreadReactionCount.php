<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat unread_reaction_count has changed @chat_id Chat identifier @unread_reaction_count The number of messages with unread reactions left in the chat.
 */
class UpdateChatUnreadReactionCount extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('unread_reaction_count')]
        private int $unreadReactionCount,
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

    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    public function setUnreadReactionCount(int $unreadReactionCount): self
    {
        $this->unreadReactionCount = $unreadReactionCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatUnreadReactionCount',
            'chat_id' => $this->getChatId(),
            'unread_reaction_count' => $this->getUnreadReactionCount(),
        ];
    }
}
