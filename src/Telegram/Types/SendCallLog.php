<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends log file for a call to Telegram servers @call_id Call identifier @log_file Call log file. Only inputFileLocal and inputFileGenerated are supported
 */
class SendCallLog extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('call_id')]
        private int $callId,
        #[SerializedName('log_file')]
        private InputFile|null $logFile = null,
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

    public function getLogFile(): InputFile|null
    {
        return $this->logFile;
    }

    public function setLogFile(InputFile|null $logFile): self
    {
        $this->logFile = $logFile;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendCallLog',
            'call_id' => $this->getCallId(),
            'log_file' => $this->getLogFile(),
        ];
    }
}
