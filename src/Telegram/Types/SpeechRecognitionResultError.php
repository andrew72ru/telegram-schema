<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The speech recognition failed @error Recognition error. An error with a message "MSG_VOICE_TOO_LONG" is returned when media duration is too big to be recognized
 */
class SpeechRecognitionResultError extends SpeechRecognitionResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('error')]
        private Error|null $error = null,
    ) {
    }

    public function getError(): Error|null
    {
        return $this->error;
    }

    public function setError(Error|null $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'speechRecognitionResultError',
            'error' => $this->getError(),
        ];
    }
}
