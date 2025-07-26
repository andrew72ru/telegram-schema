<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StoryInteractionType types
 */
abstract class StoryInteractionType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
