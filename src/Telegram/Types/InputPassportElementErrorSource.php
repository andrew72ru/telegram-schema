<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputPassportElementErrorSource types
 */
abstract class InputPassportElementErrorSource implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
