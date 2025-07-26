<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputPassportElement types
 */
abstract class InputPassportElement implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
