<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message has been pinned @message_id Identifier of the pinned message, can be an identifier of a deleted message or 0.
 */
class MessagePinMessage extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePinMessage',
            'message_id' => $this->getMessageId(),
        ];
    }
}
