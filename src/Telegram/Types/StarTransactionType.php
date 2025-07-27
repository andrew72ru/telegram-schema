<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for StarTransactionType types.
 */
abstract class StarTransactionType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
