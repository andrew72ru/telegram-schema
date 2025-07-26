<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message auto-delete or self-destruct timer setting for a chat was changed @chat_id Chat identifier @message_auto_delete_time New value of message_auto_delete_time
 */
class UpdateChatMessageAutoDeleteTime extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('message_auto_delete_time')]
        private int $messageAutoDeleteTime,
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

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    public function setMessageAutoDeleteTime(int $messageAutoDeleteTime): self
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatMessageAutoDeleteTime',
            'chat_id' => $this->getChatId(),
            'message_auto_delete_time' => $this->getMessageAutoDeleteTime(),
        ];
    }
}
