<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether a General topic is hidden in a forum supergroup chat; requires can_manage_topics right in the supergroup
 */
class ToggleGeneralForumTopicIsHidden extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true to hide and close the General topic; pass false to unhide it */
        #[SerializedName('is_hidden')]
        private bool $isHidden,
    ) {
    }

    /**
     * Get Identifier of the chat
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass true to hide and close the General topic; pass false to unhide it
     */
    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    /**
     * Set Pass true to hide and close the General topic; pass false to unhide it
     */
    public function setIsHidden(bool $isHidden): self
    {
        $this->isHidden = $isHidden;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleGeneralForumTopicIsHidden',
            'chat_id' => $this->getChatId(),
            'is_hidden' => $this->getIsHidden(),
        ];
    }
}
