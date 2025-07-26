<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CanTransferOwnershipResult types
 */
abstract class CanTransferOwnershipResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
