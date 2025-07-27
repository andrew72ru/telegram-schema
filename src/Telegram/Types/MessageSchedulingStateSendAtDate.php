<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message will be sent at the specified date @send_date Point in time (Unix timestamp) when the message will be sent. The date must be within 367 days in the future.
 */
class MessageSchedulingStateSendAtDate extends MessageSchedulingState implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('send_date')]
        private int $sendDate,
    ) {
    }

    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    public function setSendDate(int $sendDate): self
    {
        $this->sendDate = $sendDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSchedulingStateSendAtDate',
            'send_date' => $this->getSendDate(),
        ];
    }
}
