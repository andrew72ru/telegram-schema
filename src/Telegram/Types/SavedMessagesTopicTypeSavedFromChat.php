<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Topic containing messages forwarded from a specific chat @chat_id Identifier of the chat
 */
class SavedMessagesTopicTypeSavedFromChat extends SavedMessagesTopicType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'savedMessagesTopicTypeSavedFromChat',
            'chat_id' => $this->getChatId(),
        ];
    }
}
