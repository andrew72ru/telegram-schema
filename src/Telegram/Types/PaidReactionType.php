<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PaidReactionType types.
 */
abstract class PaidReactionType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
