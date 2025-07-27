<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StoryList types.
 */
abstract class StoryList implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
