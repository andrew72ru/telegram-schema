<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains read date of the message @read_date Point in time (Unix timestamp) when the message was read by the other user.
 */
class MessageReadDateRead extends MessageReadDate implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('read_date')]
        private int $readDate,
    ) {
    }

    public function getReadDate(): int
    {
        return $this->readDate;
    }

    public function setReadDate(int $readDate): self
    {
        $this->readDate = $readDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReadDateRead',
            'read_date' => $this->getReadDate(),
        ];
    }
}
