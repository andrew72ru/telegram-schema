<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a position of a chat in a chat list.
 */
class ChatPosition implements \JsonSerializable
{
    public function __construct(
        /** The chat list */
        #[SerializedName('list')]
        private ChatList|null $list = null,
        /** A parameter used to determine order of the chat in the chat list. Chats must be sorted by the pair (order, chat.id) in descending order */
        #[SerializedName('order')]
        private int $order,
        /** True, if the chat is pinned in the chat list */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
        /** Source of the chat in the chat list; may be null */
        #[SerializedName('source')]
        private ChatSource|null $source = null,
    ) {
    }

    /**
     * Get The chat list.
     */
    public function getList(): ChatList|null
    {
        return $this->list;
    }

    /**
     * Set The chat list.
     */
    public function setList(ChatList|null $list): self
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Get A parameter used to determine order of the chat in the chat list. Chats must be sorted by the pair (order, chat.id) in descending order.
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Set A parameter used to determine order of the chat in the chat list. Chats must be sorted by the pair (order, chat.id) in descending order.
     */
    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get True, if the chat is pinned in the chat list.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the chat is pinned in the chat list.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    /**
     * Get Source of the chat in the chat list; may be null.
     */
    public function getSource(): ChatSource|null
    {
        return $this->source;
    }

    /**
     * Set Source of the chat in the chat list; may be null.
     */
    public function setSource(ChatSource|null $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatPosition',
            'list' => $this->getList(),
            'order' => $this->getOrder(),
            'is_pinned' => $this->getIsPinned(),
            'source' => $this->getSource(),
        ];
    }
}
