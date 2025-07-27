<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a message created with importMessages.
 */
class MessageImportInfo implements \JsonSerializable
{
    public function __construct(
        /** Name of the original sender */
        #[SerializedName('sender_name')]
        private string $senderName,
        /** Point in time (Unix timestamp) when the message was originally sent */
        #[SerializedName('date')]
        private int $date,
    ) {
    }

    /**
     * Get Name of the original sender.
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * Set Name of the original sender.
     */
    public function setSenderName(string $senderName): self
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the message was originally sent.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the message was originally sent.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageImportInfo',
            'sender_name' => $this->getSenderName(),
            'date' => $this->getDate(),
        ];
    }
}
