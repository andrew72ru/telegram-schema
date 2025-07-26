<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for BusinessAwayMessageSchedule types
 */
abstract class BusinessAwayMessageSchedule implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
