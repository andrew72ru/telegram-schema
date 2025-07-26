<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with information about an ended video chat @duration Call duration, in seconds
 */
class MessageVideoChatEnded extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('duration')]
        private int $duration,
    ) {
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageVideoChatEnded',
            'duration' => $this->getDuration(),
        ];
    }
}
