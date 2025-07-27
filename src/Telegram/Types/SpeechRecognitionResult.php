<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for SpeechRecognitionResult types.
 */
abstract class SpeechRecognitionResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
