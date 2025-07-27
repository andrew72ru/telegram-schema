<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StoryContent types.
 */
abstract class StoryContent implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
