<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The title of a chat was changed @chat_id Chat identifier @title The new chat title
 */
class UpdateChatTitle extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('title')]
        private string $title,
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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatTitle',
            'chat_id' => $this->getChatId(),
            'title' => $this->getTitle(),
        ];
    }
}
