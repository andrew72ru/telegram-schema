<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Accepts an incoming call @call_id Call identifier @protocol The call protocols supported by the application
 */
class AcceptCall extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('call_id')]
        private int $callId,
        #[SerializedName('protocol')]
        private CallProtocol|null $protocol = null,
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

    public function getProtocol(): CallProtocol|null
    {
        return $this->protocol;
    }

    public function setProtocol(CallProtocol|null $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'acceptCall',
            'call_id' => $this->getCallId(),
            'protocol' => $this->getProtocol(),
        ];
    }
}
