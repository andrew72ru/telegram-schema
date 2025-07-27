<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputGroupCall types.
 */
abstract class InputGroupCall implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
