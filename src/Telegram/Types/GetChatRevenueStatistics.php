<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns detailed revenue statistics about a chat. Currently, this method can be used only
 */
class GetChatRevenueStatistics extends ChatRevenueStatistics implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true if a dark theme is used by the application */
        #[SerializedName('is_dark')]
        private bool $isDark,
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
     * Get Pass true if a dark theme is used by the application
     */
    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    /**
     * Set Pass true if a dark theme is used by the application
     */
    public function setIsDark(bool $isDark): self
    {
        $this->isDark = $isDark;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatRevenueStatistics',
            'chat_id' => $this->getChatId(),
            'is_dark' => $this->getIsDark(),
        ];
    }
}
