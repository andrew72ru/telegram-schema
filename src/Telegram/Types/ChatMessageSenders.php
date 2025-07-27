<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of message senders, which can be used to send messages in a chat @senders List of available message senders.
 */
class ChatMessageSenders implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('senders')]
        private array|null $senders = null,
    ) {
    }

    public function getSenders(): array|null
    {
        return $this->senders;
    }

    public function setSenders(array|null $senders): self
    {
        $this->senders = $senders;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMessageSenders',
            'senders' => $this->getSenders(),
        ];
    }
}
