<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CallState types.
 */
abstract class CallState implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
