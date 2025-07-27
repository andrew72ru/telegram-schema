<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes background in a specific chat.
 */
class DeleteChatBackground extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true to restore previously set background. Can be used only in private and secret chats with non-deleted users if userFullInfo.set_chat_background == true. */
        #[SerializedName('restore_previous')]
        private bool $restorePrevious,
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
     * Get Pass true to restore previously set background. Can be used only in private and secret chats with non-deleted users if userFullInfo.set_chat_background == true..
     */
    public function getRestorePrevious(): bool
    {
        return $this->restorePrevious;
    }

    /**
     * Set Pass true to restore previously set background. Can be used only in private and secret chats with non-deleted users if userFullInfo.set_chat_background == true..
     */
    public function setRestorePrevious(bool $restorePrevious): self
    {
        $this->restorePrevious = $restorePrevious;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteChatBackground',
            'chat_id' => $this->getChatId(),
            'restore_previous' => $this->getRestorePrevious(),
        ];
    }
}
