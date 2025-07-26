<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the message auto-delete or self-destruct (for secret chats) time in a chat. Requires change_info administrator right in basic groups, supergroups and channels.
 */
class SetChatMessageAutoDeleteTime extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New time value, in seconds; unless the chat is secret, it must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically */
        #[SerializedName('message_auto_delete_time')]
        private int $messageAutoDeleteTime,
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
     * Get New time value, in seconds; unless the chat is secret, it must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    /**
     * Set New time value, in seconds; unless the chat is secret, it must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically
     */
    public function setMessageAutoDeleteTime(int $messageAutoDeleteTime): self
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatMessageAutoDeleteTime',
            'chat_id' => $this->getChatId(),
            'message_auto_delete_time' => $this->getMessageAutoDeleteTime(),
        ];
    }
}
