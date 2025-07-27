<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputStoryContent types.
 */
abstract class InputStoryContent implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
