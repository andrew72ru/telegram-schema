<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputMessageContent types
 */
abstract class InputMessageContent implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
