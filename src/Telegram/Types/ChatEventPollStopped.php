<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A poll in a message was stopped @message The message with the poll
 */
class ChatEventPollStopped extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message')]
        private Message|null $message = null,
    ) {
    }

    public function getMessage(): Message|null
    {
        return $this->message;
    }

    public function setMessage(Message|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventPollStopped',
            'message' => $this->getMessage(),
        ];
    }
}
