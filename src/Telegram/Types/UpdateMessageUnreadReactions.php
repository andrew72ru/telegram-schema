<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of unread reactions added to a message was changed
 */
class UpdateMessageUnreadReactions extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Message identifier */
        #[SerializedName('message_id')]
        private int $messageId,
        /** The new list of unread reactions */
        #[SerializedName('unread_reactions')]
        private array|null $unreadReactions = null,
        /** The new number of messages with unread reactions left in the chat */
        #[SerializedName('unread_reaction_count')]
        private int $unreadReactionCount,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Message identifier
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get The new list of unread reactions
     */
    public function getUnreadReactions(): array|null
    {
        return $this->unreadReactions;
    }

    /**
     * Set The new list of unread reactions
     */
    public function setUnreadReactions(array|null $unreadReactions): self
    {
        $this->unreadReactions = $unreadReactions;

        return $this;
    }

    /**
     * Get The new number of messages with unread reactions left in the chat
     */
    public function getUnreadReactionCount(): int
    {
        return $this->unreadReactionCount;
    }

    /**
     * Set The new number of messages with unread reactions left in the chat
     */
    public function setUnreadReactionCount(int $unreadReactionCount): self
    {
        $this->unreadReactionCount = $unreadReactionCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateMessageUnreadReactions',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'unread_reactions' => $this->getUnreadReactions(),
            'unread_reaction_count' => $this->getUnreadReactionCount(),
        ];
    }
}
