<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat background was changed @chat_id Chat identifier @background The new chat background; may be null if background was reset to default.
 */
class UpdateChatBackground extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('background')]
        private ChatBackground|null $background = null,
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

    public function getBackground(): ChatBackground|null
    {
        return $this->background;
    }

    public function setBackground(ChatBackground|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatBackground',
            'chat_id' => $this->getChatId(),
            'background' => $this->getBackground(),
        ];
    }
}
