<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MessageSchedulingState types.
 */
abstract class MessageSchedulingState implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
