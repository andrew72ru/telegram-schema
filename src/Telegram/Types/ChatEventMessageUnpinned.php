<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message was unpinned @message Unpinned message
 */
class ChatEventMessageUnpinned extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message')]
        private Message|null $message = null,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMessageUnpinned',
            'message' => $this->getMessage(),
        ];
    }
}
