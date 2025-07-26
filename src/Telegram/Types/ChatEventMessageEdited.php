<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message was edited @old_message The original message before the edit @new_message The message after it was edited
 */
class ChatEventMessageEdited extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_message')]
        private Message|null $oldMessage = null,
        #[SerializedName('new_message')]
        private Message|null $newMessage = null,
    ) {
    }

    public function getOldMessage(): Message|null
    {
        return $this->oldMessage;
    }

    public function setOldMessage(Message|null $oldMessage): self
    {
        $this->oldMessage = $oldMessage;

        return $this;
    }

    public function getNewMessage(): Message|null
    {
        return $this->newMessage;
    }

    public function setNewMessage(Message|null $newMessage): self
    {
        $this->newMessage = $newMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMessageEdited',
            'old_message' => $this->getOldMessage(),
            'new_message' => $this->getNewMessage(),
        ];
    }
}
