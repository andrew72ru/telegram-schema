<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the default message auto-delete time for new chats @message_auto_delete_time New default message auto-delete time; must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically.
 */
class SetDefaultMessageAutoDeleteTime extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message_auto_delete_time')]
        private MessageAutoDeleteTime|null $messageAutoDeleteTime = null,
    ) {
    }

    public function getMessageAutoDeleteTime(): MessageAutoDeleteTime|null
    {
        return $this->messageAutoDeleteTime;
    }

    public function setMessageAutoDeleteTime(MessageAutoDeleteTime|null $messageAutoDeleteTime): self
    {
        $this->messageAutoDeleteTime = $messageAutoDeleteTime;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setDefaultMessageAutoDeleteTime',
            'message_auto_delete_time' => $this->getMessageAutoDeleteTime(),
        ];
    }
}
