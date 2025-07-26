<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CollectibleItemType types
 */
abstract class CollectibleItemType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
