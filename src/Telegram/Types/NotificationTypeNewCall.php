<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * New call was received @call_id Call identifier
 */
class NotificationTypeNewCall extends NotificationType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('call_id')]
        private int $callId,
    ) {
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function setCallId(int $callId): self
    {
        $this->callId = $callId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationTypeNewCall',
            'call_id' => $this->getCallId(),
        ];
    }
}
