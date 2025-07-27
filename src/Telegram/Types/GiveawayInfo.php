<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for GiveawayInfo types.
 */
abstract class GiveawayInfo implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
