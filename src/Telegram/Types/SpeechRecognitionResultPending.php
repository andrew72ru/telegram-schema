<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The speech recognition is ongoing @partial_text Partially recognized text.
 */
class SpeechRecognitionResultPending extends SpeechRecognitionResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('partial_text')]
        private string $partialText,
    ) {
    }

    public function getPartialText(): string
    {
        return $this->partialText;
    }

    public function setPartialText(string $partialText): self
    {
        $this->partialText = $partialText;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'speechRecognitionResultPending',
            'partial_text' => $this->getPartialText(),
        ];
    }
}
