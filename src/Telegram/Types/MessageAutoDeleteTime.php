<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains default auto-delete timer setting for new chats @time Message auto-delete time, in seconds. If 0, then messages aren't deleted automatically.
 */
class MessageAutoDeleteTime implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('time')]
        private int $time,
    ) {
    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageAutoDeleteTime',
            'time' => $this->getTime(),
        ];
    }
}
