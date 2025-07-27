<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message will be sent when the video in the message is converted and optimized; can be used only by the server.
 */
class MessageSchedulingStateSendWhenVideoProcessed extends MessageSchedulingState implements \JsonSerializable
{
    public function __construct(
        /** Approximate point in time (Unix timestamp) when the message is expected to be sent */
        #[SerializedName('send_date')]
        private int $sendDate,
    ) {
    }

    /**
     * Get Approximate point in time (Unix timestamp) when the message is expected to be sent.
     */
    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    /**
     * Set Approximate point in time (Unix timestamp) when the message is expected to be sent.
     */
    public function setSendDate(int $sendDate): self
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSchedulingStateSendWhenVideoProcessed',
            'send_date' => $this->getSendDate(),
        ];
    }
}
