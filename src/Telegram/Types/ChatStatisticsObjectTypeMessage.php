<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a message sent in the chat @message_id Message identifier.
 */
class ChatStatisticsObjectTypeMessage extends ChatStatisticsObjectType implements \JsonSerializable
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
            '@type' => 'chatStatisticsObjectTypeMessage',
            'message_id' => $this->getMessageId(),
        ];
    }
}
