<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StoreTransaction types
 */
abstract class StoreTransaction implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
