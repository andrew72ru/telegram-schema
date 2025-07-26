<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat's has_scheduled_messages field has changed @chat_id Chat identifier @has_scheduled_messages New value of has_scheduled_messages
 */
class UpdateChatHasScheduledMessages extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('has_scheduled_messages')]
        private bool $hasScheduledMessages,
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

    public function getHasScheduledMessages(): bool
    {
        return $this->hasScheduledMessages;
    }

    public function setHasScheduledMessages(bool $hasScheduledMessages): self
    {
        $this->hasScheduledMessages = $hasScheduledMessages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatHasScheduledMessages',
            'chat_id' => $this->getChatId(),
            'has_scheduled_messages' => $this->getHasScheduledMessages(),
        ];
    }
}
