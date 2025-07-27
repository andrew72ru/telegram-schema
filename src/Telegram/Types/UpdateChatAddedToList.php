<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat was added to a chat list @chat_id Chat identifier @chat_list The chat list to which the chat was added.
 */
class UpdateChatAddedToList extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('chat_list')]
        private ChatList|null $chatList = null,
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

    public function getChatList(): ChatList|null
    {
        return $this->chatList;
    }

    public function setChatList(ChatList|null $chatList): self
    {
        $this->chatList = $chatList;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatAddedToList',
            'chat_id' => $this->getChatId(),
            'chat_list' => $this->getChatList(),
        ];
    }
}
