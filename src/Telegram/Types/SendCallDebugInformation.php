<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends debug information for a call to Telegram servers @call_id Call identifier @debug_information Debug information in application-specific format
 */
class SendCallDebugInformation extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('call_id')]
        private int $callId,
        #[SerializedName('debug_information')]
        private string $debugInformation,
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

    public function getDebugInformation(): string
    {
        return $this->debugInformation;
    }

    public function setDebugInformation(string $debugInformation): self
    {
        $this->debugInformation = $debugInformation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendCallDebugInformation',
            'call_id' => $this->getCallId(),
            'debug_information' => $this->getDebugInformation(),
        ];
    }
}
