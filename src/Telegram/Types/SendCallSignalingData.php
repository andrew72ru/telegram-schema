<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends call signaling data @call_id Call identifier @data The data.
 */
class SendCallSignalingData extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('call_id')]
        private int $callId,
        #[SerializedName('data')]
        private string $data,
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

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendCallSignalingData',
            'call_id' => $this->getCallId(),
            'data' => $this->getData(),
        ];
    }
}
