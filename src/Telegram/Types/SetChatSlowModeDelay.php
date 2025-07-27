<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the slow mode delay of a chat. Available only for supergroups; requires can_restrict_members right @chat_id Chat identifier @slow_mode_delay New slow mode delay for the chat, in seconds; must be one of 0, 10, 30, 60, 300, 900, 3600.
 */
class SetChatSlowModeDelay extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('slow_mode_delay')]
        private int $slowModeDelay,
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

    public function getSlowModeDelay(): int
    {
        return $this->slowModeDelay;
    }

    public function setSlowModeDelay(int $slowModeDelay): self
    {
        $this->slowModeDelay = $slowModeDelay;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatSlowModeDelay',
            'chat_id' => $this->getChatId(),
            'slow_mode_delay' => $this->getSlowModeDelay(),
        ];
    }
}
