<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A background previously set in the chat; for chat backgrounds only @message_id Identifier of the message with the background
 */
class InputBackgroundPrevious extends InputBackground implements \JsonSerializable
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
            '@type' => 'inputBackgroundPrevious',
            'message_id' => $this->getMessageId(),
        ];
    }
}
