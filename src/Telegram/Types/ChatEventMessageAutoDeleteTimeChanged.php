<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message auto-delete timer was changed @old_message_auto_delete_time Previous value of message_auto_delete_time @new_message_auto_delete_time New value of message_auto_delete_time.
 */
class ChatEventMessageAutoDeleteTimeChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_message_auto_delete_time')]
        private int $oldMessageAutoDeleteTime,
        #[SerializedName('new_message_auto_delete_time')]
        private int $newMessageAutoDeleteTime,
    ) {
    }

    public function getOldMessageAutoDeleteTime(): int
    {
        return $this->oldMessageAutoDeleteTime;
    }

    public function setOldMessageAutoDeleteTime(int $oldMessageAutoDeleteTime): self
    {
        $this->oldMessageAutoDeleteTime = $oldMessageAutoDeleteTime;

        return $this;
    }

    public function getNewMessageAutoDeleteTime(): int
    {
        return $this->newMessageAutoDeleteTime;
    }

    public function setNewMessageAutoDeleteTime(int $newMessageAutoDeleteTime): self
    {
        $this->newMessageAutoDeleteTime = $newMessageAutoDeleteTime;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMessageAutoDeleteTimeChanged',
            'old_message_auto_delete_time' => $this->getOldMessageAutoDeleteTime(),
            'new_message_auto_delete_time' => $this->getNewMessageAutoDeleteTime(),
        ];
    }
}
