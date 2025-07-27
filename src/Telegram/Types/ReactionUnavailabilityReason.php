<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ReactionUnavailabilityReason types.
 */
abstract class ReactionUnavailabilityReason implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
