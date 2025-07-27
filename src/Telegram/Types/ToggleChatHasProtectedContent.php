<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the ability of users to save, forward, or copy chat content. Supported only for basic groups, supergroups and channels. Requires owner privileges.
 */
class ToggleChatHasProtectedContent extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New value of has_protected_content */
        #[SerializedName('has_protected_content')]
        private bool $hasProtectedContent,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get New value of has_protected_content.
     */
    public function getHasProtectedContent(): bool
    {
        return $this->hasProtectedContent;
    }

    /**
     * Set New value of has_protected_content.
     */
    public function setHasProtectedContent(bool $hasProtectedContent): self
    {
        $this->hasProtectedContent = $hasProtectedContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleChatHasProtectedContent',
            'chat_id' => $this->getChatId(),
            'has_protected_content' => $this->getHasProtectedContent(),
        ];
    }
}
