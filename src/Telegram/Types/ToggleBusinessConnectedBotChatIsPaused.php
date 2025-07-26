<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Pauses or resumes the connected business bot in a specific chat @chat_id Chat identifier @is_paused Pass true to pause the connected bot in the chat; pass false to resume the bot
 */
class ToggleBusinessConnectedBotChatIsPaused extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('is_paused')]
        private bool $isPaused,
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

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function setIsPaused(bool $isPaused): self
    {
        $this->isPaused = $isPaused;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleBusinessConnectedBotChatIsPaused',
            'chat_id' => $this->getChatId(),
            'is_paused' => $this->getIsPaused(),
        ];
    }
}
