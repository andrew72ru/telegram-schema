<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StoryAreaType types
 */
abstract class StoryAreaType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
