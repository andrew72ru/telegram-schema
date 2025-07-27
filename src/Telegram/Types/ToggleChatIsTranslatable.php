<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the translatable state of a chat @chat_id Chat identifier @is_translatable New value of is_translatable.
 */
class ToggleChatIsTranslatable extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('is_translatable')]
        private bool $isTranslatable,
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

    public function getIsTranslatable(): bool
    {
        return $this->isTranslatable;
    }

    public function setIsTranslatable(bool $isTranslatable): self
    {
        $this->isTranslatable = $isTranslatable;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleChatIsTranslatable',
            'chat_id' => $this->getChatId(),
            'is_translatable' => $this->getIsTranslatable(),
        ];
    }
}
