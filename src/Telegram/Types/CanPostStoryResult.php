<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CanPostStoryResult types
 */
abstract class CanPostStoryResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
