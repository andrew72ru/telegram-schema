<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PushMessageContent types
 */
abstract class PushMessageContent implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
