<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for BlockList types
 */
abstract class BlockList implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
