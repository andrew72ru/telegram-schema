<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message is being sent now, but has not yet been delivered to the server @sending_id Non-persistent message sending identifier, specified by the application
 */
class MessageSendingStatePending extends MessageSendingState implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sending_id')]
        private int $sendingId,
    ) {
    }

    public function getSendingId(): int
    {
        return $this->sendingId;
    }

    public function setSendingId(int $sendingId): self
    {
        $this->sendingId = $sendingId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSendingStatePending',
            'sending_id' => $this->getSendingId(),
        ];
    }
}
