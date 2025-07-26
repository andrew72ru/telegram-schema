<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the chat title. Supported only for basic groups, supergroups and channels. Requires can_change_info member right
 */
class SetChatTitle extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New title of the chat; 1-128 characters */
        #[SerializedName('title')]
        private string $title,
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
     * Get New title of the chat; 1-128 characters
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set New title of the chat; 1-128 characters
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatTitle',
            'chat_id' => $this->getChatId(),
            'title' => $this->getTitle(),
        ];
    }
}
