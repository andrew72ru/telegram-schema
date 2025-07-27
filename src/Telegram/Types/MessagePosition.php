<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a message in a specific position @position 0-based message position in the full list of suitable messages @message_id Message identifier @date Point in time (Unix timestamp) when the message was sent.
 */
class MessagePosition implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('position')]
        private int $position,
        #[SerializedName('message_id')]
        private int $messageId,
        #[SerializedName('date')]
        private int $date,
    ) {
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
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

    public function getDate(): int
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePosition',
            'position' => $this->getPosition(),
            'message_id' => $this->getMessageId(),
            'date' => $this->getDate(),
        ];
    }
}
