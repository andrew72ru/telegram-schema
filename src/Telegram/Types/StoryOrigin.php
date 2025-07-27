<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StoryOrigin types.
 */
abstract class StoryOrigin implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
