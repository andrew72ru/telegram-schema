<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The auto-delete or self-destruct timer for messages in the chat has been changed @message_auto_delete_time New value auto-delete or self-destruct time, in seconds; 0 if disabled @from_user_id If not 0, a user identifier, which default setting was automatically applied
 */
class MessageChatSetMessageAutoDeleteTime extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message_auto_delete_time')]
        private int $messageAutoDeleteTime,
        #[SerializedName('from_user_id')]
        private int $fromUserId,
    ) {
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

    public function getFromUserId(): int
    {
        return $this->fromUserId;
    }

    public function setFromUserId(int $fromUserId): self
    {
        $this->fromUserId = $fromUserId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatSetMessageAutoDeleteTime',
            'message_auto_delete_time' => $this->getMessageAutoDeleteTime(),
            'from_user_id' => $this->getFromUserId(),
        ];
    }
}
