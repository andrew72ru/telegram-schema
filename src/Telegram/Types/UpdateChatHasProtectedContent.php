<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat content was allowed or restricted for saving @chat_id Chat identifier @has_protected_content New value of has_protected_content
 */
class UpdateChatHasProtectedContent extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('has_protected_content')]
        private bool $hasProtectedContent,
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

    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }

    public function setHasProtectedContent(bool $hasProtectedContent): self
    {
        $this->hasProtectedContent = $hasProtectedContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatHasProtectedContent',
            'chat_id' => $this->getChatId(),
            'has_protected_content' => $this->getHasProtectedContent(),
        ];
    }
}
