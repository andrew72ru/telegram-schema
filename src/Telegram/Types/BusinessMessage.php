<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a message from a business account as received by a bot @message The message @reply_to_message Message that is replied by the message in the same chat; may be null if none
 */
class BusinessMessage implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message')]
        private Message|null $message = null,
        #[SerializedName('reply_to_message')]
        private Message|null $replyToMessage = null,
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

    public function getReplyToMessage(): Message|null
    {
        return $this->replyToMessage;
    }

    public function setReplyToMessage(Message|null $replyToMessage): self
    {
        $this->replyToMessage = $replyToMessage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessMessage',
            'message' => $this->getMessage(),
            'reply_to_message' => $this->getReplyToMessage(),
        ];
    }
}
