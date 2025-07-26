<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for GiftForResaleOrder types
 */
abstract class GiftForResaleOrder implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
