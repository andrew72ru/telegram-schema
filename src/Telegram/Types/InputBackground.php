<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputBackground types
 */
abstract class InputBackground implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
