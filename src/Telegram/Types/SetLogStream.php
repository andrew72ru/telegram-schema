<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets new log stream for internal logging of TDLib. Can be called synchronously @log_stream New log stream
 */
class SetLogStream extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('log_stream')]
        private LogStream|null $logStream = null,
    ) {
    }

    public function getLogStream(): LogStream|null
    {
        return $this->logStream;
    }

    public function setLogStream(LogStream|null $logStream): self
    {
        $this->logStream = $logStream;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setLogStream',
            'log_stream' => $this->getLogStream(),
        ];
    }
}
