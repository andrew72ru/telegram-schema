<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ReactionType types.
 */
abstract class ReactionType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
