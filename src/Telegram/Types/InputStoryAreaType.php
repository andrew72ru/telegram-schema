<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputStoryAreaType types.
 */
abstract class InputStoryAreaType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
