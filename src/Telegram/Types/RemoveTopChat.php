<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a chat from the list of frequently used chats. Supported only if the chat info database is enabled @category Category of frequently used chats @chat_id Chat identifier.
 */
class RemoveTopChat extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('category')]
        private TopChatCategory|null $category = null,
        #[SerializedName('chat_id')]
        private int $chatId,
    ) {
    }

    public function getCategory(): TopChatCategory|null
    {
        return $this->category;
    }

    public function setCategory(TopChatCategory|null $category): self
    {
        $this->category = $category;

        return $this;
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeTopChat',
            'category' => $this->getCategory(),
            'chat_id' => $this->getChatId(),
        ];
    }
}
