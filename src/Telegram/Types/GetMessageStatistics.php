<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns detailed statistics about a message. Can be used only if messageProperties.can_get_statistics == true @chat_id Chat identifier @message_id Message identifier @is_dark Pass true if a dark theme is used by the application
 */
class GetMessageStatistics extends MessageStatistics implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_id')]
        private int $messageId,
        #[SerializedName('is_dark')]
        private bool $isDark,
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

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    public function setIsDark(bool $isDark): self
    {
        $this->isDark = $isDark;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMessageStatistics',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'is_dark' => $this->getIsDark(),
        ];
    }
}
