<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputMessageReplyTo types.
 */
abstract class InputMessageReplyTo implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
