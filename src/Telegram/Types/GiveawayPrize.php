<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for GiveawayPrize types.
 */
abstract class GiveawayPrize implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
