<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns detailed statistics about a chat. Currently, this method can be used only for supergroups and channels. Can be used only if supergroupFullInfo.can_get_statistics == true @chat_id Chat identifier @is_dark Pass true if a dark theme is used by the application
 */
class GetChatStatistics extends ChatStatistics implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
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
            '@type' => 'getChatStatistics',
            'chat_id' => $this->getChatId(),
            'is_dark' => $this->getIsDark(),
        ];
    }
}
